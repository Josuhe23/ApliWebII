// src/api/authApi.js
import axiosInstance from './axiosConfig'; // Asegúrate de tener el archivo axiosConfig.js con la configuración básica

// Función para el login
export const loginUser = async (credentials) => {
  try {
    const response = await axiosInstance.post('/login', credentials);
    return response.data;  // Aquí se espera que devuelva el token y los datos del usuario
  } catch (error) {
    console.error('Error al iniciar sesión:', error);
    throw error;
  }
};

// Función para el logout
export const logoutUser = async (token) => {
  try {
    const response = await axiosInstance.post('/logout', {}, {
      headers: {
        Authorization: `Bearer ${token}`
      }
    });
    return response.data;  // Mensaje de confirmación
  } catch (error) {
    console.error('Error al cerrar sesión:', error);
    throw error;
  }
};
