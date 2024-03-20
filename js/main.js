const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: [],
            diskOverlay: [],
            showOverlay: false,
        }
    },

    methods: {

        diskShowOff(index) {

            axios.get('./server.php').then(res => {

                this.diskOverlay = res.data[index];
                this.showOverlay = true;
            });

        }

    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.diskList = res.data;
        });

    },

}).mount('#app');