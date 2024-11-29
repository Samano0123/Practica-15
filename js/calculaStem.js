function calcular() {
    // Datos
    let potencia = 500; // en W
    let potencia_kW = potencia / 1000; // Convertimos a kW
    let tiempo = 24; // en horas
    let conversion_kWh_a_J = 3.6e6; // 1 kWh = 3.6 × 10^6 J

    // Cálculos
    let potenciaConsumida = potencia; // En W
    let potenciaCalorifica = potencia; // En W
    let energiaConsumida_kWh = potencia_kW * tiempo; // En kWh
    let calorProducido_J = energiaConsumida_kWh * conversion_kWh_a_J; // En J

    // Resultado
    let resultado = `
        <p>1. Potencia consumida: ${potenciaConsumida} W</p>
        <p>2. Potencia calorífica producida: ${potenciaCalorifica} W</p>
        <p>3. Energía eléctrica consumida en 24 horas: ${energiaConsumida_kWh.toFixed(2)} kWh</p>
        <p>4. Calor producido en 24 horas: ${calorProducido_J.toFixed(2)} J</p>
    `;

    // Mostrar resultado
    let divResultado = document.getElementById("resultadoA");
    divResultado.innerHTML = resultado;
}
