import React from 'react';
import { View, ScrollView, StyleSheet, Image } from 'react-native';
import { Text, Card, Button, Icon } from '@rneui/themed';

const About = ({ navigation }) => (
  <View style={{ flex: 1, justifyContent: 'center', alignItems: 'center',  backgroundColor: '#A52A2A' }}
  >
    <Card>
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

About.navigationOptions = {
  title: 'About',
}

export default About;