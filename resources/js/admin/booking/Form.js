import AppForm from '../app-components/Form/AppForm';

Vue.component('booking-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                email:  '' ,
                country:  '' ,
                phone:  '' ,
                date:  '' ,
                trip:  '' ,
                adults:  '' ,
                children:  '' ,
                location:  '' ,
                
            }
        }
    }

});