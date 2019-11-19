<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <input type="text" style="border-style: solid" >
                    </div>
                    <modal :abrir="modalvar"></modal>
                    <div id="example-1" class="card-footer">
                        <p> <v-btn v-on:click="suma()" rounded color="green">Sumar 1</v-btn> </p>
                        <p>Se ha hecho clic en el botón de arriba {{ counter }} veces.</p>
                        <p> <v-btn v-on:click="resta()" class = "error">Eliminar 1</v-btn>  </p>
                        <p> <v-btn v-on:click="restart()" class = "info">Reiniciar</v-btn> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import modal from './modal'

    export default {
        components:{
            modal
        },
        data()
        {
            return {
                counter: 0,
                modalvar: false
            }
        },
        methods:
        {
            abrirmodal()
            {
                if (this.modal == true){
                    this.modal = false;
                }
                else{
                    this.modal = true;
                }
            },
            suma()
            {
                this.counter = this.counter + 1
            },
            resta()
            {
                if (this.counter != 0){
                    this.counter = this.counter - 1
                }
                else{
                    alert('');
                }
            },
            restart()
            {
                this.counter = 0
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
