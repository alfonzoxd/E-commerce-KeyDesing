@extends('layouts.app')

@section('title', 'KeyDesign - Pasarela de Pago')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-16 relative overflow-hidden">
    <div class="max-w-6xl mx-auto">

        <!-- Header con progreso -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-white mb-4">
                Finalizar Compra
            </h1>

            <!-- Barra de progreso -->
            <div class="flex items-center justify-center mb-6">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="ml-2 text-white font-medium">Carrito</span>
                    </div>

                    <div class="w-12 h-0.5 bg-red-500"></div>

                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">2</span>
                        </div>
                        <span class="ml-2 text-white font-medium">Pago</span>
                    </div>

                    <div class="w-12 h-0.5 bg-gray-600"></div>

                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center">
                            <span class="text-gray-400 font-bold text-sm">3</span>
                        </div>
                        <span class="ml-2 text-gray-400 font-medium">Confirmación</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Formulario de pago -->
            <div class="lg:col-span-2">
                <div class="bg-gradient-to-br from-gray-900 to-black rounded-3xl p-8 shadow-2xl border border-red-500/20">

                    <!-- Métodos de pago -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                            Método de Pago
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <label class="payment-method-card cursor-pointer">
                                <input type="radio" name="payment_method" value="card" class="sr-only" checked>
                                <div class="payment-card bg-gray-800 border-2 border-red-500 rounded-xl p-4 text-center transition-all duration-300">
                                    <div class="text-red-500 mb-2">
                                        <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                        </svg>
                                    </div>
                                    <span class="text-white font-medium">Tarjeta</span>
                                </div>
                            </label>

                            <label class="payment-method-card cursor-pointer">
                                <input type="radio" name="payment_method" value="paypal" class="sr-only">
                                <div class="payment-card bg-gray-800 border-2 border-gray-600 rounded-xl p-4 text-center transition-all duration-300">
                                    <div class="text-gray-400 mb-2">
                                        <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M7.076 21.337H2.47a.641.641 0 01-.633-.74L4.944.901C5.026.382 5.474 0 5.998 0h7.46c2.57 0 4.578.543 5.69 1.81 1.01 1.15 1.304 2.42 1.012 4.287-.023.143-.047.288-.077.437-.983 5.05-4.349 6.797-8.647 6.797h-2.19c-.524 0-.968.382-1.05.9l-1.12 7.106zm14.146-14.42a3.35 3.35 0 00-.607-.541c-.013.03-.026.06-.04.09-.983 5.05-4.349 6.797-8.647 6.797h-2.19c-.524 0-.968.382-1.05.9l-1.12 7.106h4.61c.459 0 .85-.334.922-.787l.04-.204.686-4.356.044-.246c.072-.453.463-.787.922-.787h.578c3.76 0 6.705-1.528 7.56-5.95.357-1.846.174-3.388-.777-4.471-.284-.322-.617-.586-.99-.787z"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-400 font-medium">PayPal</span>
                                </div>
                            </label>

                            <label class="payment-method-card cursor-pointer">
                                <input type="radio" name="payment_method" value="yape" class="sr-only">
                                <div class="payment-card bg-gray-800 border-2 border-gray-600 rounded-xl p-4 text-center transition-all duration-300">
                                    <div class="text-gray-400 mb-2">
                                        <svg class="w-8 h-8 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.568 8.16l-5.715 8.448a.75.75 0 01-1.238 0L4.9 8.16a.75.75 0 01.619-1.16h10.43a.75.75 0 01.619 1.16z"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-400 font-medium">Yape</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- QR para Yape -->
                    <div id="yape-qr" class="hidden mb-8">
                        <h3 class="text-xl font-semibold text-white mb-4">Escanea el Código QR para pagar con Yape</h3>
                        <div id="qr-code" class="text-center"></div>
                    </div>

                    <!-- Formulario de tarjeta -->
                    <form id="payment-form" class="space-y-6">

                        <div class="payment-section" id="card-section">
                            <h3 class="text-xl font-semibold text-white mb-4">Información de la Tarjeta</h3>

                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Número de Tarjeta</label>
                                    <div class="relative">
                                        <input type="text" id="card-number" placeholder="1234 5678 9012 3456" maxlength="19" required
                                            class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                        <div class="absolute right-3 top-3 flex space-x-1">
                                            <div class="w-8 h-5 bg-gradient-to-r from-blue-600 to-blue-700 rounded text-white text-xs flex items-center justify-center font-bold">V</div>
                                            <div class="w-8 h-5 bg-gradient-to-r from-red-600 to-red-700 rounded text-white text-xs flex items-center justify-center font-bold">M</div>
                                        </div>
                                    </div>
                                    <span class="error-message" id="card-number-error"></span>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-300 text-sm font-medium mb-2">Fecha de Vencimiento</label>
                                        <input type="text" id="expiry-date" placeholder="MM/AA" maxlength="5" required
                                            class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                        <span class="error-message" id="expiry-date-error"></span>
                                    </div>
                                    <div>
                                        <label class="block text-gray-300 text-sm font-medium mb-2">CVV</label>
                                        <input type="text" id="cvv" placeholder="123" maxlength="3" required
                                            class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                        <span class="error-message" id="cvv-error"></span>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Nombre del Titular</label>
                                    <input type="text" id="cardholder-name" placeholder="Nombre completo" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="cardholder-name-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-700 pt-6">
                            <h3 class="text-xl font-semibold text-white mb-4">Información de Facturación</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Email</label>
                                    <input type="email" id="email" placeholder="tu@email.com" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="email-error"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Teléfono</label>
                                    <input type="tel" id="phone" placeholder="+51 999 999 999" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="phone-error"></span>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="block text-gray-300 text-sm font-medium mb-2">Dirección</label>
                                <input type="text" id="address" placeholder="Av. Ejemplo 123" required
                                    class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                <span class="error-message" id="address-error"></span>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Ciudad</label>
                                    <input type="text" id="city" placeholder="Lima" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="city-error"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Distrito</label>
                                    <input type="text" id="district" placeholder="Miraflores" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="district-error"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-300 text-sm font-medium mb-2">Código Postal</label>
                                    <input type="text" id="postal-code" placeholder="15074" required
                                        class="w-full bg-gray-800 border border-red-500/30 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                                    <span class="error-message" id="postal-code-error"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Términos y condiciones -->
                        <div class="border-t border-gray-700 pt-6">
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" id="terms-checkbox" class="mt-1 w-4 h-4 text-red-600 bg-gray-800 border-red-500/30 rounded focus:ring-red-500 focus:ring-2">
                                <span class="text-gray-300 text-sm">
                                    Acepto los <a href="#" class="text-red-500 hover:text-red-400 underline">términos y condiciones</a>
                                    y la <a href="#" class="text-red-500 hover:text-red-400 underline">política de privacidad</a>
                                </span>
                            </label>
                            <span class="error-message" id="terms-error"></span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Resumen del pedido -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-gray-900 to-black rounded-3xl p-6 shadow-2xl border border-red-500/20 sticky top-8">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        Resumen del Pedido
                    </h2>

                    <!-- Producto ejemplo -->
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center space-x-4 p-4 bg-gray-800/50 rounded-xl">
                            <div class="w-15 h-15 bg-gray-700 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-sm">Teclado Mecánico RGB Gaming</h3>
                                <p class="text-gray-400 text-xs">Cantidad: 1</p>
                            </div>
                            <span class="text-red-500 font-bold">S/299.90</span>
                        </div>
                    </div>

                    <!-- Código de descuento -->
                    <div class="mb-6">
                        <div class="flex">
                            <input type="text" placeholder="Código de descuento"
                                   class="flex-1 bg-gray-800 border border-red-500/30 rounded-l-lg px-4 py-3 text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                            <button class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-3 rounded-r-lg font-medium transition-all duration-200">
                                Aplicar
                            </button>
                        </div>
                    </div>

                    <!-- Desglose de precios -->
                    <div class="space-y-3 mb-6 text-sm">
                        <div class="flex justify-between text-gray-300">
                            <span>Subtotal</span>
                            <span>S/299.90</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>Envío</span>
                            <span>S/15.00</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>IGV (18%)</span>
                            <span>S/53.98</span>
                        </div>
                        <div class="border-t border-gray-700 pt-3">
                            <div class="flex justify-between text-white font-bold text-lg">
                                <span>Total</span>
                                <span class="text-red-500">S/368.88</span>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de pago -->
                    <button id="pay-button" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg mb-4">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Pagar Ahora
                        </span>
                    </button>

                    <!-- Tarjeta de crédito ficticia -->
                    <div id="card-preview" class="mb-4 transform transition-all duration-300 perspective-1000">
                        <div class="relative w-full h-48 bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-red-500/20 shadow-xl">
                            <!-- Frente de la tarjeta -->
                            <div class="absolute inset-0 rounded-xl bg-gradient-to-br from-red-600/10 to-red-800/10 backdrop-blur-sm"></div>
                            <div class="relative z-10 h-full flex flex-col justify-between">
                                <!-- Logo del banco -->
                                <div class="flex justify-between items-start">
                                    <div class="w-12 h-8 bg-gradient-to-r from-red-500 to-red-600 rounded-md flex items-center justify-center">
                                        <span class="text-white font-bold text-xs">KD</span>
                                    </div>
                                    <div class="flex space-x-1">
                                        <div id="card-type-visa" class="w-8 h-5 bg-gradient-to-r from-blue-600 to-blue-700 rounded text-white text-xs flex items-center justify-center font-bold opacity-50">V</div>
                                        <div id="card-type-master" class="w-8 h-5 bg-gradient-to-r from-red-600 to-red-700 rounded text-white text-xs flex items-center justify-center font-bold opacity-50">M</div>
                                    </div>
                                </div>

                                <!-- Número de tarjeta -->
                                <div class="space-y-1">
                                    <div class="w-8 h-6 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-sm"></div>
                                    <div id="card-number-display" class="text-white text-lg font-mono tracking-wider">
                                        •••• •••• •••• ••••
                                    </div>
                                </div>

                                <!-- Información inferior -->
                                <div class="flex justify-between items-end">
                                    <div>
                                        <div class="text-gray-400 text-xs uppercase tracking-wide">Titular</div>
                                        <div id="card-name-display" class="text-white text-sm font-medium">NOMBRE COMPLETO</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-gray-400 text-xs uppercase tracking-wide">Expira</div>
                                        <div id="card-expiry-display" class="text-white text-sm font-medium">MM/AA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Información de seguridad -->
                    <div class="text-center">
                        <div class="flex items-center justify-center space-x-2 text-xs text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <span>Pago seguro y encriptado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de procesamiento -->
<div id="processing-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-gradient-to-br from-gray-900 to-black rounded-3xl p-8 max-w-md w-full mx-4 border border-red-500/20">
        <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Procesando Pago</h3>
            <p class="text-gray-400">Por favor espera mientras procesamos tu pago...</p>
        </div>
    </div>
</div>

<!-- Modal de Confirmación -->
<div id="confirmation-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-gradient-to-br from-gray-900 to-black rounded-3xl p-8 max-w-md w-full mx-4 border border-green-500/20 text-center">
        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">¡Compra Exitosa!</h3>
        <p class="text-gray-400">Gracias por tu compra. Serás redirigido al inicio en breve...</p>
    </div>
</div>


<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funciones de validación
    const validation = {
        cardNumber: (value) => {
            const cleaned = value.replace(/\s/g, '');
            if (!cleaned) return 'El número de tarjeta es requerido';
            if (cleaned.length < 12 || cleaned.length > 19) return 'Debe tener entre 12 y 19 dígitos';
            if (!/^\d+$/.test(cleaned)) return 'Solo se permiten números';
            return null; // Acepta cualquier número
        },

        expiryDate: (value) => {
            if (!value) return 'La fecha de vencimiento es requerida';
            const regex = /^(0[1-9]|1[0-2])\/\d{2}$/;
            if (!regex.test(value)) return 'Formato inválido (MM/AA)';
            return null;
        },


        cvv: (value) => {
            if (!value) return 'El CVV es requerido';
            if (!/^\d{3}$/.test(value)) return 'CVV debe tener 3 dígitos';
            return null;
        },

        cardholderName: (value) => {
            if (!value.trim()) return 'El nombre del titular es requerido';
            if (value.trim().length < 2) return 'Nombre muy corto';
            if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value)) return 'Solo se permiten letras y espacios';
            return null;
        },

        email: (value) => {
            if (!value) return 'El email es requerido';
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regex.test(value)) return 'Email inválido';
            return null;
        },

        phone: (value) => {
            if (!value) return 'El teléfono es requerido';
            const cleaned = value.replace(/\D/g, '');
            if (cleaned.length < 9) return 'Teléfono muy corto';
            return null;
        },

        required: (value) => {
            if (!value || !value.trim()) return 'Este campo es requerido';
            return null;
        }
    };

    function showError(fieldId, message) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(fieldId + '-error');

        if (message) {
            field.classList.add('error');
            field.classList.remove('valid');
            field.classList.add('shake');
            setTimeout(() => field.classList.remove('shake'), 500);
            if (errorSpan) errorSpan.textContent = message;
        } else {
            field.classList.remove('error');
            field.classList.add('valid');
            if (errorSpan) errorSpan.textContent = '';
        }
    }

    // Validación en tiempo real
    const fields = [
        { id: 'card-number', validator: validation.cardNumber },
        { id: 'expiry-date', validator: validation.expiryDate },
        { id: 'cvv', validator: validation.cvv },
        { id: 'cardholder-name', validator: validation.cardholderName },
        { id: 'email', validator: validation.email },
        { id: 'phone', validator: validation.phone },
        { id: 'address', validator: validation.required },
        { id: 'city', validator: validation.required },
        { id: 'district', validator: validation.required },
        { id: 'postal-code', validator: validation.required }
    ];

    fields.forEach(field => {
        const element = document.getElementById(field.id);
        if (element) {
            element.addEventListener('blur', function() {
                const error = field.validator(this.value);
                showError(field.id, error);
            });
        }
    });

    // Formateo de campos (código existente mejorado)
    const cardNumberInput = document.getElementById('card-number');
    const cardNumberDisplay = document.getElementById('card-number-display');
    const cardTypeVisa = document.getElementById('card-type-visa');
    const cardTypeMaster = document.getElementById('card-type-master');

    cardNumberInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
        let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
        e.target.value = formattedValue;

        if (value.length > 0) {
            let displayValue = value.padEnd(16, '•').match(/.{1,4}/g).join(' ');
            cardNumberDisplay.textContent = displayValue;

            if (value.startsWith('4')) {
                cardTypeVisa.style.opacity = '1';
                cardTypeMaster.style.opacity = '0.3';
            } else if (value.startsWith('5')) {
                cardTypeMaster.style.opacity = '1';
                cardTypeVisa.style.opacity = '0.3';
            } else {
                cardTypeVisa.style.opacity = '0.5';
                cardTypeMaster.style.opacity = '0.5';
            }
        } else {
            cardNumberDisplay.textContent = '•••• •••• •••• ••••';
            cardTypeVisa.style.opacity = '0.5';
            cardTypeMaster.style.opacity = '0.5';
        }
    });

    const expiryInput = document.getElementById('expiry-date');
    const cardExpiryDisplay = document.getElementById('card-expiry-display');

    expiryInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        e.target.value = value;
        cardExpiryDisplay.textContent = value || 'MM/AA';
    });

    const cvvInput = document.getElementById('cvv');
    cvvInput.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').substring(0, 3);
    });

    const cardholderInput = document.getElementById('cardholder-name');
    const cardNameDisplay = document.getElementById('card-name-display');

    cardholderInput.addEventListener('input', function(e) {
        let value = e.target.value.toUpperCase();
        cardNameDisplay.textContent = value || 'NOMBRE COMPLETO';
    });

    // Formateo de teléfono
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 0) {
            if (value.startsWith('51')) {
                value = '+51 ' + value.substring(2);
            } else if (!value.startsWith('51')) {
                value = '+51 ' + value;
            }
        }
        e.target.value = value;
    });

    // Validación completa del formulario
    function validateForm() {
        let isValid = true;
        const selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

        // Validar campos comunes
        const commonFields = ['email', 'phone', 'address', 'city', 'district', 'postal-code'];
        commonFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            const error = validation.required(field.value);
            if (error) {
                showError(fieldId, error);
                isValid = false;
            }
        });

        // Validar email específicamente
        const emailField = document.getElementById('email');
        const emailError = validation.email(emailField.value);
        if (emailError) {
            showError('email', emailError);
            isValid = false;
        }

        // Validar teléfono específicamente
        const phoneField = document.getElementById('phone');
        const phoneError = validation.phone(phoneField.value);
        if (phoneError) {
            showError('phone', phoneError);
            isValid = false;
        }

        // Validar campos específicos según método de pago
        if (selectedPaymentMethod === 'card') {
            const cardFields = [
                { id: 'card-number', validator: validation.cardNumber },
                { id: 'expiry-date', validator: validation.expiryDate },
                { id: 'cvv', validator: validation.cvv },
                { id: 'cardholder-name', validator: validation.cardholderName }
            ];

            cardFields.forEach(field => {
                const element = document.getElementById(field.id);
                const error = field.validator(element.value);
                if (error) {
                    showError(field.id, error);
                    isValid = false;
                }
            });
        }

        // Validar términos y condiciones
        const termsCheckbox = document.getElementById('terms-checkbox');
        const termsError = document.getElementById('terms-error');
        if (!termsCheckbox.checked) {
            termsError.textContent = 'Debes aceptar los términos y condiciones';
            termsCheckbox.parentElement.classList.add('shake');
            setTimeout(() => termsCheckbox.parentElement.classList.remove('shake'), 500);
            isValid = false;
        } else {
            termsError.textContent = '';
        }

        return isValid;
    }

    // Manejar cambio de método de pago (código existente)
    const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            const cardSection = document.getElementById('card-section');
            const yapeQr = document.getElementById('yape-qr');
            const cardPreview = document.getElementById('card-preview');

            if (this.value === 'card') {
                cardSection.style.display = 'block';
                yapeQr.style.display = 'none';
                cardPreview.style.display = 'block';
            } else if (this.value === 'yape') {
                cardSection.style.display = 'none';
                yapeQr.style.display = 'block';
                cardPreview.style.display = 'none';
                document.getElementById("qr-code").innerHTML = '';
                new QRCode(document.getElementById("qr-code"), {
                    text: "https://www.yape.com.pe/pagar/keydesign/S368.88",
                    width: 200,
                    height: 200,
                    colorDark: "#ef4444",
                    colorLight: "#ffffff"
                });
            } else {
                cardSection.style.display = 'none';
                yapeQr.style.display = 'none';
                cardPreview.style.display = 'none';
            }
        });
    });

    // Manejar botón de pago con validación
    const payButton = document.getElementById('pay-button');
    const processingModal = document.getElementById('processing-modal');

    payButton.addEventListener('click', function() {
        if (validateForm()) {
            processingModal.classList.add('hidden');

// Mostrar modal de confirmación
const confirmationModal = document.getElementById('confirmation-modal');
confirmationModal.classList.remove('hidden');

// Redirigir al inicio después de 3 segundos
setTimeout(() => {
    window.location.href = '/';
}, 3000);

        } else {
            // Scroll al primer error
            const firstError = document.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });

    // Efectos de tarjeta (código existente)
    const cardPreview = document.getElementById('card-preview');
    cardPreview.style.transform = 'rotateY(0deg)';

    cardPreview.addEventListener('mouseenter', function() {
        this.style.transform = 'rotateY(5deg) scale(1.02)';
    });

    cardPreview.addEventListener('mouseleave', function() {
        this.style.transform = 'rotateY(0deg) scale(1)';
    });
});
</script>

<style>
.error {
    border-color: #ef4444 !important;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

.error-message {
    color: #ef4444;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    display: block;
}

.valid {
    border-color: #10b981 !important;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
}

.shake {
    animation: shake 0.5s;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}
</style>

@endsection
