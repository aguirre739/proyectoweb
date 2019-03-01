function curl ($method, $url, $data) {

    // Convertimos el array de parametros en un query string
    $data = http_build_query($data);

    // y lo agregamos a la URL en caso de un GET o DELETE
    if (($method === "GET") || ($method === "DELETE")) {
        $url = '?' . $data;
    }

    // Definimos opciones comunes a todas las llamadas
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false
    );

    // Si es necesario, agregamos los parametros al body de la llamada
    if ($data) {
        $options[CURLOPT_POSTFIELDS] = $data;
    }

    // Ejecutamos la llamada
    $call = curl_init();
    curl_setopt_array($call, $options);
    $response = curl_exec($call);
    curl_close($call);

    // Retornamos el resultado como array
    return json_decode($response, true);

}