@extends ('index')
    
    @section ('content')

    <template>
      <v-app id="inspire">
        <v-navigation-drawer
          v-model="drawer"
          app
        >
          <v-list dense>
            <v-list-item @click="" href="/">
              <v-list-item-action>
                <v-icon>home</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>Home</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
            <v-list-item @click="" href="inventario">
              <v-list-item-action>
                <v-icon>contact_mail</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>Contact</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list>
        </v-navigation-drawer>

        <v-app-bar
          app
          color="indigo"
          dark
        >
          <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
          <v-toolbar-title>Ejemplares en inventario</v-toolbar-title>
        </v-app-bar>

        <v-content>

          <abrirmodal></abrirmodal>

        </v-content>
        <v-footer
          color="indigo"
          app
        >
          <span class="white--text">&copy; 2019</span>
        </v-footer>
      </v-app>
    </template>

    <table>
      @foreach ($plants as $plantas)
          <tr>
              <td> {{ $plantas->id }} </td>
              <td> {{ $plantas->nombre }} </td>
              <td> {{ $plantas->cientifico }} </td>
              <td> {{ $plantas->tipo }} </td>
              <td> {{ $plantas->cantidad }} </td>
          </tr>
      @endforeach
    </table>

    <script>
      export default {
        props: {
          source: String,
        },
        data: () => ({
          drawer: null,
        }),
      }
    </script>

    @endsection