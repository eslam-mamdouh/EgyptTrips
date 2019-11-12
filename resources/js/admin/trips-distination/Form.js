import AppForm from '../app-components/Form/AppForm';

Vue.component('trips-distination-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                slug:  '' ,
                
            },
            mediaCollections: ['distinations']

        }
    }

});