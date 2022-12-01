/*Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
 Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
 Stack
 Html, CSS, VueJS (importato tramite CDN), axios, PHP
 Consigli
 Nello svolgere l’esercizio seguite un approccio graduale.
 Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
 Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato read (ancora non memorizzate i dati da nessuna parte).
 Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.*/



const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tasksList: [],
            API_URL_read: 'readTasks.php',
            API_URL_add: 'addTask.php',
            newTask: '',
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    this.tasksList = response.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        }, addTask() {
            const data = {
                newTask: this.newTask
            }
            axios
                .post(this.API_URL_add, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(resp => {
                    // console.log(resp);
                    this.tasksList = resp.data
                    this.newTask = '';
                })
                .catch(err => {
                    console.error(err.message);
                })
        }
    },
    mounted() {
        this.readTasks(this.API_URL_read);
    }
}).mount('#app')