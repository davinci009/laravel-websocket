<template>
    <div class="row">
        <div class="col">
            <label for="job"><strong>Nueva Tarea a realizar:</strong></label>
            <input 
            type="text" 
            class="form-control" 
            name="job" 
            placeholder="Introduzca la nueva tarea..."
            @keyup.enter="sendJob"
            @keydown="validate"
            v-model="new_job">
        </div>
    </div>
</template>

<script>
    export default {
        props: [],
        data (){
            return {
                new_job: "",
            }
        },
        created() {

        },
        methods: {
            sendJob(){
                this.$emit('add', this.new_job);
                this.new_job = '';
            },
            validate(){
               
                let letter = this.new_job.substr(this.new_job.length - 1)                
                if(isNumber(letter)){ return; }
            }
            
        },
    }
    function isNumber(val) {            
        return /^[-]?\d+$/.test(val);
    }
</script>
