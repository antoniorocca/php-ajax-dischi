let app = new Vue({
    el: "#app",
    data: {
        dischi: [],    
    },
    mounted() {
        axios.get('milestone2/database.php') 
        .then(response => {
         this.dischi = response.data;   
        });
    }
});