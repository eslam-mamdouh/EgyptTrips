import AppForm from '../app-components/Form/AppForm';

Vue.component('gallery-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                'slug' : "",
                distination_id:  '' ,
                
            },
            mediaCollections: ['galleries']
        }
    }

});