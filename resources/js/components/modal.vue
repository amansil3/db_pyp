<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">

      <template v-slot:activator="{ on }">
        <v-btn color="primary" dark v-on="on">Open Dialog</v-btn>
      </template>

      <v-card>
        <template>
          <v-form 
            ref="form"
            v-model="valid"
            lazy-validation
          >

            <v-card-title>
              <span class="headline">Nuevo ejemplar</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field
                      label="Nombre vulgar"
                      v-model="nombreVulgar"
                      :rules="nombreVulgarRules"
                      required>
                    </v-text-field>
                  </v-col>

                  <v-col cols="12" sm="6" md="4">
                    <v-text-field
                    v-model="nombreCientifico"
                    label="Nombre científico"
                    :rules="nombreCientificoRules"
                    hint="example of helper text only on focus">
                    </v-text-field>
                  </v-col>
                </v-row>
                
                <v-row>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field
                      v-model="cantidad"
                      label="Cantidad"
                      :rules="cantidadRules"
                      type="number"
                      min="1"
                      hint="No puede ser menor a 0"
                      persistent-hint
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>

              </v-container>
              <!-- <small>*indicates required field</small> -->
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="error" @click="dialog = false">Cerrar</v-btn>
              <v-btn 
                color="warning" 
                v-on:click="vaciar"
                >
                  Vaciar Formulario
              </v-btn>
              <v-btn 
                color="success" 
                v-on:click="validate"
                >
                  Enviar
              </v-btn>
            </v-card-actions>
          </v-form>
        </template>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
  export default {
    props:[
      'abrir'
    ],
    data() 
    {
      return {
        valid: true,
        dialog: false,
        nombreVulgar:null,
        nombreVulgarRules:[
          v => !!v || 'El nombre vulgar es requerido',
          v => (v && v.length <= 50) || 'El nombre vulgar no puede superar los 50 caracteres',
        ],
        nombreCientifico:null,
        nombreCientificoRules:[
          v => !!v || 'El nombre científico es requerido',
          v => (v && v.length <= 50 ) || 'El nombre científico no puede superar los 50 caracteres',
        ],
        cantidad: null,
        cantidadRules:[
          v => !!v || 'La cantidad es requerida',
        ],
      }
    },
    methods:{
      vaciar()
      {
        this.nombreVulgar=null;
        this.nombreCientifico=null;
        this.cantidad = null;
      },
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
          this.save()
        }
      },
      save()
      {
        axios.post("/admin/ruta", 
        {
          nombreVulgar: this.nombreVulgar,
          nombreCientifico: this.nombreCientifico,
          cantidad: this.cantidad,
        })
        .then(response => 
        {
          console.log(response)
        })
        .catch(error => 
        {
          console.log(error.response)
        })
      },
    },
  }
</script>

<!--
  

-->