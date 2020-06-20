<template>
    <div class="row">
        <div class="col">
            <ul>
                <li>
                    <button @click="deleteme()">Elimina</button>
                    
                    <button v-if="editMode" @click="saveme()">Guardar</button>
                    <button v-else @click="editme()">Editar</button>
                    
                    <input v-if="editMode" type="text" class="form-control" v-model="job.job">
                    <div v-else>{{ job.id }} - {{ job.job }}
                        <span v-show="index > 5">
                            ("se estan acumulando de masiadas")
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['job', 'index'],
        data (){
            return {
                editMode: false
            }
        },
        created() {

        },
        methods: {
            deleteme(){
                this.$emit('deleteJob', this.index)
            },
            editme(){
                this.editMode = true;
            },
            saveme(){
                alert('guardar este elemento ' + this.index);
            }
        },
    }
    //v-model.number
</script>
