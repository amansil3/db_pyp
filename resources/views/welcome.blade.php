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
                <v-list-item @click="">
                  <v-list-item-action>
                    <v-icon>home</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>Home</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
                <v-list-item @click="">
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
              <v-toolbar-title>Application</v-toolbar-title>
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
                  <v-flex text-xs-center>
                    <v-tooltip left>
                      <template v-slot:activator="{ on }">
                        <v-btn
                          icon
                          href="/admin/contacts"
                          large
                          target="_blank"
                          v-on="on"
                        >
                          <v-icon large>mdi-code-tags</v-icon>
                        </v-btn>
                      </template>
                      <span>Source</span>
                    </v-tooltip>

                    <v-tooltip right>
                      <template v-slot:activator="{ on }">
                        <v-btn
                          icon
                          large
                          href="https://codepen.io/johnjleider/pen/rJdVMq"
                          target="_blank"
                          v-on="on"
                        >
                          <v-icon large>mdi-codepen</v-icon>
                        </v-btn>
                      </template>
                      <span>Codepen</span>
                    </v-tooltip>
                  </v-flex>
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

