'use strict';

window.API = class API {

    static request(path, method = 'GET', data = {}) {
        let requestBody = undefined;

        if (method !== 'GET' && data !== {}) {
            requestBody = JSON.stringify(data);
        }
        return fetch('/api/v1' + path, {
            method: method,
            headers: {
                "Content-Type": "application/json"
            },
            body: requestBody,
        })
            .catch(API.handleGenericError);
    }

    static handleDefaultResponse(response) {
        if (!response.ok) {
            return response.json().then(API.handleGenericError);
        }

        return response.json().then(data => {
            notyf.success(data.data.message);
        });
    }

    static handleGenericError(error) {
        console.error(error);
        let errorMessage = error?.message ?? error?.data?.message ?? 'An unknown error occured.';
        notyf.error(errorMessage);
        return error;
    }
}
