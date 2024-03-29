import axios from 'axios';
const apiKey = process.env.REACT_APP_API_KEY;
const apiWebSite = process.env.REACT_APP_API_WEB_SITE;

const login = async (email, password) => {
    try {
        const response = await axios.post(`${apiWebSite}/login`, {
        email: email,
        password: password,
        }, {
        headers: {
            'Content-Type': 'application/json',
            'x-api-key': apiKey
        },
        });

        if (response.status === 200) {
        const token = response.data.access_token;
        return token;
        } else {
            throw new Error('Credenciales incorrectas');
        }
    } catch (error) {
        throw new Error('Credenciales incorrectas');
    }
};

const userInfo = async (token) => {
    try {
        const response = await axios.get(`${apiWebSite}/user`, {
        headers: {
            'Content-Type': 'application/json',
            'x-api-key': apiKey,
            Authorization: `Bearer ${token}`,
        },
        });

        if (response.status === 200) {
        const userInfo = response.data;
        return userInfo;
        } else {
        throw new Error('Token inválido');
        }
    } catch (error) {
        throw new Error('Error al obtener la información del usuario');
    }
};

const update = async (token, dataToUpdate) => {
    try {
        const formData = new FormData();
        formData.append('_method', 'PATCH')

        for (let key in dataToUpdate) {
            if (dataToUpdate.hasOwnProperty(key)) {
                formData.append(key, dataToUpdate[key]);
            }
        }
        const response = await axios.post(`${apiWebSite}/user`, formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
            'x-api-key': apiKey,
            Authorization: `Bearer ${token}`,
        },
        });

        if (response.status === 200) {
        const elements = response.data;
        return elements;
        } else {
            throw new Error(`Error a la hora de actualizar el usuario`);
        }
    } catch (error) {
        throw new Error(error);
    }
};

const logout = async (token) => {
    try {
        const response = await axios.delete(`${apiWebSite}/logout`, {
            headers: {
            'Content-Type': 'application/json',
            'x-api-key': apiKey,
            Authorization: `Bearer ${token}`,
            },
        });

        if (response.status === 200) {
            return 'Logout exitoso';
        } else {
            throw new Error('Error en la solicitud de logout');
        }
    } catch (error) {
        console.log(error);
        throw new Error('Error al realizar el logout');
    }
};

export default { login, userInfo, update, logout };

