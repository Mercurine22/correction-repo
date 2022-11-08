import { useState } from 'react';
import { StyleSheet, View } from 'react-native';
import { Text, Input, Button, Image } from 'react-native-elements';
import Icon from 'react-native-vector-icons/FontAwesome';
import Logo from '../../assets/correction2.png'

export default function Login() {

  const [email, setEmail] = useState(null)
  const [password, setPassword] = useState(null)
 

  const entrar = () => {
    console.log(email)
    console.log(password)
  } 

  return (
    <View style={styles.container}
    backgroundColor='#A52A2A'
    >
      <Text h3
      style={{ color:"#ffffff"}}
      >Tela de Login</Text>

      <Image
        style={styles.item} source={require('../../assets/correction2.png')}
        
      />
      
      <Input
        placeholder="E-mail"
        leftIcon={{ type: 'font-awesome', name: 'envelope',  color:"#ffffff"}}
        style={styles}
        onChangeText={value => setEmail(value)}
        keyboardType="email-address"
      />
      <Input
        placeholder="Senha"
        leftIcon={{ type: 'font-awesome', name: 'lock',  color:"#ffffff" }}
        style={styles}
        onChangeText={value => setPassword(value)}
        secureTextEntry={true}
        
      />
      <Button
        icon={
          <Icon
            name="arrow-right"
            size={15}
            color="white"
          />
        }
        title="Entrar"
        titleStyle={{color:"#ffffff"}}
          type="outline"
        onPress={() => entrar()}
      />


    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  item: {
    aspectRatio: 3.5,
    resizeMode: "center",
    width: 320,
    height: 100,
  },
  
});
