<template>
    <div>
        <h1>Lista de labores pendientes</h1>
        <list 
        v-for="(job, index) in jobs" 
        :key="index" 
        :job = job 
        :index = index
        @deleteJob="deleteJob(index)"

        >
        </list>

        <new_list @add="addnew"></new_list>
    </div>
</template>

<script>
    export default {
        props: [],
        data (){
            return {
                jobs: [
                    {'id': 1, 'job': 'lavar la ropa'},
                    {'id': 2, 'job': 'sacar al perro a pasear'},
                    {'id': 3, 'job': 'ir al colegio'},
                    {'id': 4, 'job': 'aprender mas sobre laravel'},
                ]
            }
        },
        created() {

        },
        methods: {
            addnew(job){

                if(job.length === 0 || job === ''){
                    alert('ingrese algo');
                    return;
                }

                let num = this.jobs[this.jobs.length-1].id + 1;

                this.jobs.push({ 
                    id: num, job: job
                });

            },
            deleteJob(index){
                alert(index);
                this.jobs.splice(index, 1);
            }
        },
    }
</script>
