<!DOCTYPE html>
<html>
    <head>
    
    <!-- Load js files -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b125711156.js"></script>
    -->
    
    <style>
        body {
            font-family: Arial;
        }
    </style>

    <!-- Assign UTF-8 -->
    <meta charset="utf-8" />

    <title>
        Index
    </title>
    </head>
    <body>

        <div id="app">
          <v-app id="inspire">
            <v-navigation-drawer
              v-model="drawer"
              app
            >
              <v-list dense>
                <v-list-item @click="" href="/">
                  <v-list-item-action>
                    <v-icon>mdi mdi-home </v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>Inicio</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
                <v-list-item @click="" href="inventario">
                  <v-list-item-action>
                    <v-icon>mdi mdi-leaf-maple</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>Stock</v-list-item-title>
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
              <v-toolbar-title>Laraveliada</v-toolbar-title>
            </v-app-bar>

    
            <v-content>
              <v-container
                fluid
                fill-height
              >
                <v-layout
                  align-center
                  justify-center
                >

                  @yield('content')

                </v-layout>
              </v-container>
            </v-content>
            
            <v-footer
              color="indigo"
              app
            >
              <span class="white--text">&copy; 2019</span>
            </v-footer>
          </v-app>
        </div>
    </body>

    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>

</html>

