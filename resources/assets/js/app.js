
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',

    data: {
        formInputs: {},
        formErrors: {}
    },

    methods: {
        // AJAX form validation: http://taha-sh.com/blog/setting-up-ajax-validation-with-laravel-vuejs-in-no-time
        submitForm: function(e) {
            var form = e.srcElement;
            var action = form.action;
            var csrfToken = form.querySelector('input[name="_token"]').value;

            this.$http.post(action, this.formInputs, {
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })

            .then(function() {
                form.submit();
            })

            .catch(function (data, status, request) {
                this.formErrors = data.data;
            });
        }
    }
});
