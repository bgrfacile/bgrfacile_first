@extends('layouts.base')

@section('title')
    cours
@endsection

@section('baniere')

@endsection


@section('content')
        <section class="py-8 container w-10/12 mx-auto">
            {{--        title--}}
            <div class="text-center">
                <div class="text-2xl text-secondary font-bold flex-1" id="typed-strings">
                    <p>Bienvenue</p>
                    <p>retrouver les cours ici</p>
                </div>
                <span id="typed" class="text-2xl text-secondary font-bold flex-1"></span>
            </div>
            {{--        filtre--}}
            <div>
                <section class="mx-8">
                    {{--                formulaire de chargement--}}
                    <form action="{{ route('cours.view') }}" method="post"
                          class="flex flex-col md:flex-col text-gray-700 text-lg font-medium mb-4 p-2 border-2 border-dashed">
                        @csrf
                        {{--                    cycle --}}
                        <div>
                            <select
                                    name="formation"
                                    id="cycle"
                                    class="linked-select border p-2 rounded w-full mb-4"
                                    data-target="#level"
                                    data-source="{{ route('contenu.level',['type'=>'formation','filter'=>'id']) }}">
                                <option value="0">Sélectionner un cycle</option>
                                @foreach($trainings as $training)
                                    <option value="{{$training->id}}">{{$training->name}}</option>
                                @endforeach
                            </select>

                            {{--                    niveau--}}
                            <div class="">
                                <select
                                        style="display: none"
                                        name="level"
                                        id="level"
                                        class="linked-select border p-2 rounded  w-full mb-4"
                                        data-target="#subject"
                                        data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}">
                                    <option value="0">Sélectionner un niveau</option>
                                </select>
                            </div>
                            {{--                    matiere--}}
                            <div class="">
                                <select
                                        style="display: none"
                                        name="subject"
                                        id="subject"
                                        class="border p-2 rounded w-full mb-4 subject_charge"
                                        data-target="#subject"
                                        data-source="{{ route('contenu.level',['type'=>'subject','filter'=>'id']) }}">
                                    <option value="0">Sélectionner une matière</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit"
                                id="btn_hiden"
                                class="hidden rounded bg-blue-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-blue-500">
                            recharger
                        </button>
                    </form>
                </section>
            </div>
        </section>
@endsection


@section('script')
    <script src="{{ asset('js/filter_courses.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            strings: ['First ^1000 sentence.', 'Second sentence.']
        });
    </script>

    <script>
        const subject_charge = document.querySelector('.subject_charge');
        const btn_hiden = document.querySelector('#btn_hiden');
        subject_charge.addEventListener('change', function (e) {
            if (subject_charge.value !== "0") {
                btn_hiden.style.display = 'flex';
            } else {
                btn_hiden.style.display = 'none';
            }

        });
    </script>

@endsection

<script>
    import Button from "../../js/Jetstream/Button";

    export default {
        components: {Button}
    }
</script>