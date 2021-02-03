let app = new Vue({
    el: "#app",
    data: {
        dischi: [],    
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/milestone2/database.php/') 
        .then(response => {
         this.dischi = response.data;   
        });
    }
});