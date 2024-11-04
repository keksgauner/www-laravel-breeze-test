<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Calculator') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-center justify-center h-1/2">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <input type="text" class="display w-full h-12 text-right mb-4 p-2 text-2xl border border-gray-300 rounded"
                id="display" readonly>
            <div class="buttons grid grid-cols-4 gap-2">
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('7')">7</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('8')">8</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('9')">9</button>
                <button class="button bg-blue-500 text-white p-4 rounded text-xl"
                    onclick="appendOperator('/')">/</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('4')">4</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('5')">5</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('6')">6</button>
                <button class="button bg-blue-500 text-white p-4 rounded text-xl"
                    onclick="appendOperator('*')">*</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('1')">1</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('2')">2</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('3')">3</button>
                <button class="button bg-blue-500 text-white p-4 rounded text-xl"
                    onclick="appendOperator('-')">-</button>
                <button class="button bg-gray-200 p-4 rounded text-xl" onclick="appendNumber('0')">0</button>
                <button class="button bg-red-500 text-white p-4 rounded text-xl" onclick="clearDisplay()">C</button>
                <button class="button bg-green-500 text-white p-4 rounded text-xl"
                    onclick="calculateResult()">=</button>
                <button class="button bg-blue-500 text-white p-4 rounded text-xl"
                    onclick="appendOperator('+')">+</button>
            </div>
        </div>
        <script>
            function appendNumber(number) {
                document.getElementById('display').value += number;
            }

            function appendOperator(operator) {
                document.getElementById('display').value += ' ' + operator + ' ';
            }

            function clearDisplay() {
                document.getElementById('display').value = '';
            }

            function calculateResult() {
                let display = document.getElementById('display');
                try {
                    display.value = eval(display.value);
                } catch (e) {
                    display.value = 'Error';
                }
            }
        </script>
</x-app-layout>