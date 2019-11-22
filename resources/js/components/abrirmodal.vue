<template>
    <div class="container">
        <div class="row justify-content-center">
            Ejemplares
        </div>
        <div class="row justify-content-center">
            <modal :abrir="modalvar"></modal>
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
                modalvar: false,
            }
        },
        methods:
        {
            abrirmodal()
            {
                if (this.modal == true)
                {
                    this.modal = false;
                }
                else{
                    this.modal = true;
                }
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
