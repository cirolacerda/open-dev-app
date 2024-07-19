<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 90" width="50" height="50" {{ $attributes }}>
    <style>
        .background {
            fill: #000000;
            /* cor de fundo preta */
        }

        .open {
            fill: #ffffff;
            /* cor do texto "open" branca */
            font-family: Arial;
            font-size: 21px;
        }

        .dev {
            fill: #ffffff;
            /* cor do texto "dev" branca */
            font-family: Arial;
            font-size: 14px;
        }

        .icon {
            fill: none;
            /* sem preenchimento */
            stroke: #ffffff;
            /* cor do traço branca */
            stroke-width: 2;
            /* largura do traço */
        }
    </style>
    <circle class="background" cx="50" cy="50" r="45" />
    <text class="open" x="47" y="43" text-anchor="middle">open</text>
    <text class="dev" x="55" y="67" text-anchor="middle">&#60;dev&#62; </dev></text>
    <!-- Ícone de computador e programador -->
    <rect class="icon" x="20" y="20" width="60" height="60" rx="2" ry="2" />
</svg>
