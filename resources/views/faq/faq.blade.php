@extends('layouts.front')

@section('content')
    {{--    <div id="bar" class="flex justify-center items-center min-h-screen w-full text-bold text-5xl" >--}}
    {{--        Cette section est encours de construction--}}
    {{--    </div>--}}

    <div class="container w-full md:w-3/4 mx-auto mb-20 px-4">
        <div class="flex flex-wrap md:flex-no-wrap justify-center py-10">
            <aside class="w-1/3 px-3">
                <h4>Choisissez une catégorie</h4>
                <nav>
                    <ul>
                        <li>
                            <a href="#0">
                                <span>Questions fréquemment posées</span>
                                <svg class="cr rc fj rn sf ur wn wk xs h_ pt hz he" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#0" @click.prevent="page = '2'"
                                                style="outline: none; box-shadow: none;"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qu'est-ce qu'Open PRO</font></font></span>
                                <svg class="cr rc fj rn sf ur wn wk xs h_ pt hz he" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"></path>
                                </svg>
                            </a></li>
                        <li class="ub na yv"><a :class="{ 'text-purple-600': page === '3' }"
                                                class="np nw uk lx lu ww h_ pt hz" href="#0" @click.prevent="page = '3'"
                                                style="outline: none; box-shadow: none;"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fonctionnalités du plan Open PRO</font></font></span>
                                <svg class="cr rc fj rn sf ur wn wk xs h_ pt hz he" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"></path>
                                </svg>
                            </a></li>
                        <li class="ub na yv"><a :class="{ 'text-purple-600': page === '4' }"
                                                class="np nw uk lx lu ww h_ pt hz" href="#0" @click.prevent="page = '4'"
                                                style="outline: none; box-shadow: none;"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">Commencer</font></font></span>
                                <svg class="cr rc fj rn sf ur wn wk xs h_ pt hz he" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"></path>
                                </svg>
                            </a></li>
                        <li class="ub na yv"><a :class="{ 'text-purple-600': page === '5' }"
                                                class="np nw uk lx lu ww h_ pt hz" href="#0" @click.prevent="page = '5'"
                                                style="outline: none; box-shadow: none;"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ sur les paiements</font></font></span>
                                <svg class="cr rc fj rn sf ur wn wk xs h_ pt hz he" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"></path>
                                </svg>
                            </a></li>
                    </ul>
                </nav>
            </aside>
            <section class="w-2/3 px-3">
                <div>
                    <h2 class="text-3xl">FAQ - Foire aux questions</h2>
                    <p>Dernière mise à jour - 30 juin 2020</p>
                </div>
                <ul class="bh">
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Comment puis-je utiliser Open PRO sans
                                    inscription?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Puis-je importer mon plan du site dans Open
                                    PRO?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Comment puis-je basculer mon abonnement entre les
                                    forfaits essentiels et premium?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Puis-je annuler mon abonnement à tout
                                    moment?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Y a-t-il un rabais supplémentaire lorsqu'il est
                                    payé annuellement?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Que se passe-t-il si je ne renouvelle pas ma
                                    licence après un an?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                    <li class="u_"><h4 class="rz ro sa"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Quels types de méthodes de paiement
                                    proposez-vous?</font></font></h4>
                        <p class="rq lu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </font><font style="vertical-align: inherit;">Quis
                                    enim lobortis scelerisque fermentum.</font></font></p></li>
                </ul>
            </section>
        </div>
    </div>
@endsection
