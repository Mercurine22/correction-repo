import React from 'react';
import { View, ScrollView, StyleSheet, Image } from 'react-native';
import { Text, Card, Button, Icon, Avatar} from '@rneui/themed';
import { MapView } from 'react-native-maps'; 
const styles = StyleSheet.create({
  container: {
    paddingTop: 50,
    borderColor: '#A52A2A'
  },
  stretch: {
    aspectRatio: 0.5,
    width: 200,
    height: 200,
    resizeMode: 'center',
    marginLeft: 35
  },
});

const Home = ({ navigation }) => (
  
  <View
  style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#A52A2A' }}
  >
   <Card
   
   containerStyle={{backgroundColor: '#862424', borderColor: '#862424'}}
   >
    <Avatar
          size={64}
          rounded
          icon={{ name: 'user', type: 'font-awesome' }}
          containerStyle={{ backgroundColor: '#000000' }}
        />
        
        <Text 
        title="Você não está logado(a)"
        titleStyle={{ marginBottom: 10, color:"#ffffff" }}
        />
    </Card>
    <Card
    containerStyle={{backgroundColor: '#862424', borderColor: '#862424'}}
    >
      <Card.Title
      style={{ marginBottom: 10, color:"#ffffff" }}
      >Bem-vindo ao Corr-e-ction!</Card.Title>
      <Card.Divider />
      <Card.Image
            style={styles.stretch} source={require('../../assets/transparente.png')}
          />
          <Text style={{ marginBottom: 10, color:"#ffffff" }}>
            O mais novo aplicativo para correção de redações!!!
          </Text>
          <Button 
          title="VEJA AGORA"
          titleStyle={{color:"#ffffff"}}
          type="outline"
           
            buttonStyle={{
              borderRadius: 0,
              marginLeft: 0,
              marginRight: 0,
              marginBottom: 0,
              
            }}
            style={{
              color: "#ffffff",
            }}
            
          />
    </Card>
  </View>
  
);

Home.navigationOptions = {
  
  title: 'Home',
  color: '#A52A2A'

}

export default Home;