<template>
  <v-form
    ref="form"
    v-model="valid"
    lazy-validation
  >
    <v-text-field
      v-model="name"
      :counter="20"
      :rules="nameRules"
      label="Nombre"
      required
    ></v-text-field>

    <v-text-field
      v-model="surname"
      :counter="20"
      :rules="surnameRules"
      label="Apellido"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>

    <v-select
      v-model="select"
      :items="items"
      :rules="[v => !!v || 'Campo requerido']"
      label="Item"
      required
    ></v-select>

    <v-btn
      :disabled="!valid"
      color="success"
      class="mr-4"
      @click="validate"
    >
      Enviar
    </v-btn>
    
    <v-btn
      color="error"
      class="mr-4"
      @click="reset"
    >
      Reset Form
    </v-btn>

    <v-btn
      color="warning"
      @click="resetValidation"
    >
      Reset Validation
    </v-btn>
  </v-form>
</template>

<script>
  export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'El nombre es requerido',
        v => (v && v.length <= 20) || 'El nombre debe ser menor a 20 caracteres',
      ],
      surname: '',
      surnameRules:[
        v => !!v || 'El apellido es requerido',
        v => (v && v.length <= 20) || 'El nombre debe ser menor a 20 caracteres'
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail es requerido',
        v => /.+@.+\..+/.test(v) || 'El e-mail debe ser válido',
      ],
      select: 'null',
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
    }),

    methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
          this.save()
        }
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
      save(){
        axios.post("/admin/ruta", {
          name: this.name,
          surname: this.surname,
          email: this.email,
          item: this.select
        })
        .then(response => {
          console.log(response)
        })
        .catch(error => {
          console.log(error.response)
        })
      },
    },
  }
</script>