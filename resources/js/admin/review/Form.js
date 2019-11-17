import AppForm from '../app-components/Form/AppForm';

Vue.component('review-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                trip:  '' ,
                rate:  '' ,
                comment:  '' ,
                name:  '' ,
                country:  '' ,
                message:  '' ,
                
            }
        }
    }

});