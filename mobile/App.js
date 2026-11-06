import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import LoginEcra from './src/ecrans/LoginEcra';
import AlterarPinEcra from './src/ecrans/AlterarPinEcra';
import ContaEcra from './src/ecrans/ContaEcra';
import TransferirEcra from './src/ecrans/TransferirEcra';
import ComprovativoEcra from './src/ecrans/ComprovativoEcra';
import ExtratoEcra from './src/ecrans/ExtratoEcra';

const Stack = createNativeStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Login" screenOptions={{ headerShown: false }}>
        <Stack.Screen name="Login" component={LoginEcra} />
        <Stack.Screen name="AlterarPin" component={AlterarPinEcra} />
        <Stack.Screen name="Conta" component={ContaEcra} />
        <Stack.Screen name="Transferir" component={TransferirEcra} />
        <Stack.Screen name="Comprovativo" component={ComprovativoEcra} />
        <Stack.Screen name="Extrato" component={ExtratoEcra} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}