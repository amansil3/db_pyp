<template>
  <v-data-table
    v-model="selected"
    :headers="headers"
    :items="items"
    :single-select="singleSelect"
    item-key="name"
    show-select
    class="elevation-1"
  >
    <template v-slot:top>
      <v-switch v-model="singleSelect" label="Single select" class="0pa-3"></v-switch>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    data () {
      return {
        singleSelect: false,
        selected: [],
        headers: [
          { text: 'Nombre vulgar', value: 'nombre'},
          { text: 'Nombre científico', value: 'cientifico' },
          { text: 'Cantidad', value: 'cantidad' },
          { text: 'Tipo', value: 'tipo' }
        ],
        items: [
          {
            nombre: 'Frozen Yogurt',
            cientifico: 159,
            cantidad: 6.0,
            tipo: '1%',
          },
          {
            nombre: 'Ice cream sandwich',
            cientifico: 237,
            cantidad: 9.0,
            tipo: '1%',
          },
          {
            nombre: 'Eclair',
            cientifico: 262,
            cantidad: 16.0,
            tipo: '7%',
          },
          {
            nombre: 'Cupcake',
            cientifico: 305,
            cantidad: 3.7,
            tipo: '8%',
          },
          {
            nombre: 'Gingerbread',
            cientifico: 356,
            cantidad: 16.0,
            tipo: '16%',
          },
          {
            nombre: 'Jelly bean',
            cientifico: 375,
            cantidad: 0.0,
            carbs: 94,
            protein: 0.0,
            tipo: '0%',
          },
          {
            nombre: 'Lollipop',
            cientifico: 392,
            cantidad: 0.2,
            tipo: '2%',
          },
          {
            nombre: 'Honeycomb',
            cientifico: 408,
            cantidad: 3.2,
            tipo: '45%',
          },
          {
            nombre: 'Donut',
            cientifico: 452,
            cantidad: 25.0,
            tipo: '22%',
          },
          {
            nombre: 'KitKat',
            cientifico: 518,
            cantidad: 26.0,
            tipo: '6%',
          },
        ],
      }
    },
  }
</script>