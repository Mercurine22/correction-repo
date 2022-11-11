import { createStackNavigator, createAppContainer } from 'react-navigation-stack'

import Home from '../Home/index.js';
import Login from '../Login/index.js';

const RoutesViews =
    createStackNavigator({
        Home: { screen: Home},
        

    }
);

const Routes = createAppContainer(RoutesViews);
      
export default Routes;