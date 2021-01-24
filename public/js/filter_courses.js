function debounce(callback, delay) {
    let timer;
    return function () {
        let args = arguments;
        let context = this;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, delay)
    }
}

class LinkedSelect {

    /**
     *
     * @param {HTMLSelectElement} $select
     */
    constructor($select) {
        this.$select = $select;
        this.$target = document.querySelector(this.$select.dataset.target);
        this.$placeholder = this.$target.firstElementChild;
        this.onChange = debounce(this.onChange.bind(this), 500);
        this.$select.addEventListener('change', this.onChange);
        this.cache = {};
        this.$loader = null;
    }

    /**
     *  Se declanche au changement de valeur d'un select
     * @param {Event} e
     */
    onChange(e) {
        if (e.target.value === '0') {
            return
        }
        this.loadOptions(e.target.value, (options) => {
            this.$target.innerHTML = options;
            this.$target.insertBefore(this.$placeholder, this.$target.firstChild);
            this.$target.selectedIndex = 0;
            this.$target.style.display = null;
        });
    }

    /**
     *
     * @param {string} id
     * @param callback
     */
    loadOptions(id, callback) {
        if (this.cache[id]) {
            callback(this.cache[id]);
            return
        }
        //on recupere les données en Ajax
        this.showLoader(); //an charge un loader
        let request = new XMLHttpRequest();
        request.open(
            'GET',
            this.$select.dataset.source.replace('id', id),
            true
        );
        request.onload = () => {
            if (request.status >= 200 && request.status < 400) {
                let data = JSON.parse(request.responseText);
                let options = data.reduce(function (acc, option) {
                    return acc + '<option value="' + option.id + '">' + option.name + '</option>'
                }, '');
                //on injecte les données dans le prochain select
                this.cache[id] = options;
                this.hideLoader();
                callback(options);
            } else {
                alert('impossible de charger la liste');
            }
        };
        request.onerror = function () {
            alert('impossible de charger la liste');
        };
        request.send();
    }

    showLoader() {
        this.$loader = document.createTextNode('chargement...');
        this.$target.parentNode.appendChild(this.$loader);
    }

    hideLoader() {
        if (this.$loader !== null) {
            this.$loader.parentNode.removeChild(this.$loader);
            this.$loader = null;
        }
    }
}


let $selects = document.querySelectorAll('.linked-select');
$selects.forEach(function ($select) {
    new LinkedSelect($select);
});
//
// let $selectCharger = document.querySelector('.subject');
// $selectCharger.addEventListener('change', function () {
//     location
// });
