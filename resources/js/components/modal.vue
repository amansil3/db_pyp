<template>
  <v-row justify="center">
    <v-dialog v-model="abrir" persistent max-width="600px">

      <template v-slot:activator="{ on }">
        <v-btn color="primary" dark v-on="on">Cargar un nuevo ejemplar</v-btn>
      </template>

      <v-card>

        <v-card-title>
          <span class="headline">Nuevo ejemplar</span>
        </v-card-title>

        <v-card-text>
          <v-container>

            <v-row>
              <v-col cols="12" sm="6" md="4">
                <v-text-field
                 label="Nombre vulgar" 
                 required>
                </v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="4">
                <v-text-field 
                label="Nombre científico" 
                hint="example of helper text only on focus">
                </v-text-field>
              </v-col>
            </v-row>
            
            <v-row>
              <v-col cols="12" sm="6" md="4">
                <v-text-field
                  label="Cantidad"
                  type="number"
                  min="0"
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
          <v-btn color="error" @click="abrir = false">Cerrar</v-btn>
          <v-btn color="success" @click="abrir = false">Cargar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
  export default {
    props:[
      'abrir'
    ],
    data () {
      return {
        dialog: false,
      }
    },
  }
</script>