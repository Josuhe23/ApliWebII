// src/App.jsx
import React, { useState } from 'react';
import { loginUser, logoutUser } from './axios/authApi';

const App = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [token, setToken] = useState('');
  const [user, setUser] = useState(null);
  const [errorMessage, setErrorMessage] = useState('');
  const [successMessage, setSuccessMessage] = useState('');

  // Manejar el inicio de sesión
  const handleLogin = async () => {
    try {
      setErrorMessage(''); // Limpiar mensajes previos
      setSuccessMessage('');
      const credentials = { email, password };
      const data = await loginUser(credentials);
      setToken(data.token);  // Guarda el token devuelto
      setUser(data.user);    // Guarda los datos del usuario
      setSuccessMessage('Inicio de sesión exitoso');
    } catch (error) {
      const errorResponse = error.response ? error.response.data : error;
      if (errorResponse.error === 'Usuario no encontrado') {
        setErrorMessage('Usuario no encontrado. Verifica el correo electrónico.');
      } else if (errorResponse.error === 'Contraseña incorrecta') {
        setErrorMessage('Contraseña incorrecta. Inténtalo de nuevo.');
      } else {
        setErrorMessage('Error en el inicio de sesión. Inténtalo más tarde.');
      }
    }
  };

  // Manejar el cierre de sesión
  const handleLogout = async () => {
    try {
      await logoutUser(token);
      setToken('');  // Limpia el token
      setUser(null); // Limpia los datos del usuario
      setSuccessMessage('Cierre de sesión exitoso');
      setErrorMessage('');
    } catch (error) {
      setErrorMessage('Error al cerrar sesión. Inténtalo más tarde.');
    }
  };

  return (
    <div style={styles.container}>
      <h1 style={styles.title}>Autenticación</h1>

      {errorMessage && <p style={styles.error}>{errorMessage}</p>}
      {successMessage && <p style={styles.success}>{successMessage}</p>}

      {!user ? (
        <div style={styles.form}>
          <h2>Iniciar Sesión</h2>
          <input 
            type="email" 
            placeholder="Email" 
            value={email} 
            onChange={(e) => setEmail(e.target.value)} 
            style={styles.input}
          />
          <input 
            type="password" 
            placeholder="Contraseña" 
            value={password} 
            onChange={(e) => setPassword(e.target.value)} 
            style={styles.input}
          />
          <button onClick={handleLogin} style={styles.button}>Login</button>
        </div>
      ) : (
        <div style={styles.userInfo}>
          <h2>Hola!, {user.name}.</h2>
          <p>Te puedes ir porfavor, bye.</p>
          <p><strong>Nombre:</strong> {user.name}</p>
          <p><strong>Email:</strong> {user.email}</p>
          <p><strong>Fecha de creación:</strong> {new Date(user.created_at).toLocaleString()}</p>
          <button onClick={handleLogout} style={styles.button}>Logout</button>
        </div>
      )}
    </div>
  );
};

// Estilos en línea básicos
const styles = {
  container: {
    width: '100%',
    maxWidth: '400px',
    margin: '0 auto',
    padding: '20px',
    textAlign: 'center',
    border: '1px solid #ddd',
    borderRadius: '10px',
    boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)',
    backgroundColor: '#f9f9f9',
  },
  title: {
    fontSize: '24px',
    marginBottom: '20px',
  },
  input: {
    width: '100%',
    padding: '10px',
    marginBottom: '15px',
    borderRadius: '5px',
    border: '1px solid #ddd',
    fontSize: '16px',
  },
  button: {
    padding: '10px 20px',
    fontSize: '16px',
    color: '#fff',
    backgroundColor: '#007BFF',
    border: 'none',
    borderRadius: '5px',
    cursor: 'pointer',
  },
  error: {
    color: 'red',
    marginBottom: '10px',
  },
  success: {
    color: 'green',
    marginBottom: '10px',
  },
  userInfo: {
    textAlign: 'left',
    padding: '10px 20px',
    borderRadius: '10px',
    border: '1px solid #ddd',
    marginBottom: '15px',
    backgroundColor: '#fff',
  }
};

export default App;
