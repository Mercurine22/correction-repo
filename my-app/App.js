import { createAppContainer } from "react-navigation";
import { createStackNavigator } from "react-navigation-stack";
import { createBottomTabNavigator} from '@react-navigation/bottom-tabs';
import { NavigationContainer } from '@react-navigation/native';
import { createDrawerNavigator } from '@react-navigation/drawer';

import Home from './src/Home/index.js';
import About from './src/About/index.js';
import Login from './src/Login/index.js';

const RoutesViews =
    createStackNavigator({
        Home: { screen: Home},
        About: { screen: About},
        Login: { screen: Login},
    }
);

const Drawer = createDrawerNavigator();

function MyDrawer() {
  return (
    <Drawer.Navigator> 
     
      <Drawer.Screen name="Home" component={Home} />
      <Drawer.Screen name="Login" component={Login} />
      <Drawer.Screen name="About" component={About} />
    </Drawer.Navigator>
  );
}

//const App = createAppContainer(RoutesViews);

export default function App(){
  return (
    <NavigationContainer>
      <MyDrawer />
    </NavigationContainer>
  )
};