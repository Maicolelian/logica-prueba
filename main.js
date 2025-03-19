export function obtenerDatosPromise(callback) {
    setTimeout(() => {
      callback(null, { data: 'datos importantes' });
    }, 2000);
  }

export function obtenerDatosPromise() {
    return Promise ((resolve) => {
        setTimeout(() => {
            resolve({ data: 'datos importantes' });
        }, 2000);
    });
}