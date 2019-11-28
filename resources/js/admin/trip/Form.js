import AppForm from '../app-components/Form/AppForm';

Vue.component('trip-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                description:  '' ,
                price:  '' ,
                child_price:  '' ,
                distination_id:  '' ,
            },
            mediaCollections: ['trips']
        }
    }

});