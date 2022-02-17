new Vue({
    el: '#app',
    data : {
        disks: [],
    },
    mounted(){
        axios.get('http://localhost:8888/php-ajax-dischi/database/dbAxios.php').then((response) => {
            this.disks = response.data;
        })
    }

})


