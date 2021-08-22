<?php
$this->title = 'Goblin framework!';
?>
<style>
    body {
        background-color: #2f263c;
        margin: 0;
    }

    @font-face {
        font-family: 'Luckiest Guy';
        src: url("../font/luckiest-guy.woff2");
    }

    .c-header-box {
        text-align: center;
        padding: 60px 25px 50px;
        position: relative;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ0MCIgaGVpZ2h0PSI2NTMiIHZpZXdCb3g9IjAgMCAxNDQwIDY1MyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgc3R5bGU9Im1peC1ibGVuZC1tb2RlOmxpZ2h0ZW4iIG9wYWNpdHk9IjAuMSI+CjxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMCkiPgo8cGF0aCBkPSJNMTk5My43MSAwSC01NTMuNzFWMTk5OC42M0gxOTkzLjcxVjBaIiBmaWxsPSIjMkM0Qjk1Ii8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzIwIDMwMi42NzZDNTUwLjI5MyAyMTkuOTYzIDMxMC4yOTQgMTAyLjk5IDAgLTQ4LjI0MjdIMTgwQzQwNi42NjMgODguNDQzNSA1ODYuNjYzIDIwNS40MTcgNzIwIDMwMi42NzZaIiBmaWxsPSIjRkZGQ0UxIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzIwIDMwMi42NzZDNjI4LjE1NyAxOTQuNjA3IDUwOC4xNTYgNzcuNjM0NSAzNjAgLTQ4LjI0MjdINTQwQzYxMy4xNzggNzAuOTc3NiA2NzMuMTc4IDE4Ny45NTEgNzIwIDMwMi42NzZaIiBmaWxsPSIjRkZGQ0UxIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzIwIDMwMi42NzZDNzIwIDE4NS43MDMgNzIwIDY4LjczMDMgNzIwIC00OC4yNDI3SDkwMEM4MjYuODIyIDcwLjk3NzYgNzY2LjgyMiAxODcuOTUxIDcyMCAzMDIuNjc2WiIgZmlsbD0iI0ZGRkNFMSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuNjc2QzgxMS44NDMgMTk0LjYwNyA5MzEuODQ0IDc3LjYzNDUgMTA4MCAtNDguMjQyN0gxMjYwQzEwMzMuMzQgODguNDQzNSA4NTMuMzM3IDIwNS40MTcgNzIwIDMwMi42NzZaIiBmaWxsPSIjRkZGQ0UxIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzIwIDMwMi42NzZDODg5LjcwNyAyMTkuOTYzIDExMjkuNzEgMTAyLjk5IDE0NDAgLTQ4LjI0MjdWMzkuNDg2OUMxMTU5LjU1IDE0OS45NTkgOTE5LjU1MiAyMzcuNjg5IDcyMCAzMDIuNjc2WiIgZmlsbD0iI0ZGRkNFMSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTM2MCA2NTNIMTgwQzQwNi42NjMgNTE2LjQyOSA1ODYuNjYzIDM5OS41NTUgNzIwIDMwMi4zNzlDNjI4LjE1NyA0MTAuMzU1IDUwOC4xNTYgNTI3LjIyOSAzNjAgNjUzWiIgZmlsbD0iI0ZGRkNFMSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTAgNjUzVjU2NS4zNDVDMjgwLjQ0NyA0NTQuOTY2IDUyMC40NDggMzY3LjMxIDcyMCAzMDIuMzc5QzU1MC4yOTMgMzg1LjAyMSAzMTAuMjk0IDUwMS44OTUgMCA2NTNaIiBmaWxsPSIjRkZGQ0UxIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMCA0NzcuNjg5VjM5MC4wMzRDMjQ0LjYxMSAzNTQuMzk4IDQ4NC42MTIgMzI1LjE4IDcyMCAzMDIuMzc5QzQ5OC4yNyAzNDcuMTA0IDI1OC4yNyA0MDUuNTQxIDAgNDc3LjY4OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDMwMi4zNzlWMjE0LjcyM0MyNDQuNjExIDI1MC4zNTkgNDg0LjYxMiAyNzkuNTc4IDcyMCAzMDIuMzc5QzQ4MCAzMDIuMzc5IDI0MCAzMDIuMzc5IDAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDEyNy4wNjhWMzkuNDEyNkMyODAuNDQ3IDE0OS43OTIgNTIwLjQ0OCAyMzcuNDQ3IDcyMCAzMDIuMzc5QzQ5OC4yNyAyNTcuNjUzIDI1OC4yNyAxOTkuMjE2IDAgMTI3LjA2OFoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM5NDEuNzMgMjU3LjUyNiAxMTgxLjczIDE5OC45MjIgMTQ0MCAxMjYuNTY4VjIxNC40NzRDMTE5NS4zOSAyNTAuMjExIDk1NS4zODggMjc5LjUxMyA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM5NjAgMzAyLjM3OSAxMjAwIDMwMi4zNzkgMTQ0MCAzMDIuMzc5VjM5MC4yODRDMTE5NS4zOSAzNTQuNTQ2IDk1NS4zODggMzI1LjI0NCA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM5NDEuNzMgMzQ3LjA2MSAxMTgxLjczIDQwNS40NDMgMTQ0MCA0NzcuNTIzVjU2NS4wOTVDMTE1OS41NSA0NTQuODIxIDkxOS41NTIgMzY3LjI0OSA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM4ODkuNzA3IDM4NS4wMjEgMTEyOS43MSA1MDEuODk1IDE0NDAgNjUzSDEyNjBDMTAzMy4zNCA1MTYuNDI5IDg1My4zMzcgMzk5LjU1NSA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM4MTIuMTA1IDQxMC4zNTUgOTMyLjQ0OCA1MjcuMjI5IDEwODEuMDMgNjUzSDkwMC41MTNDODI3LjEyNiA1MzMuODgxIDc2Ni45NTUgNDE3LjAwNyA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM3MjAgNDE5LjI1MyA3MjAgNTM2LjEyNiA3MjAgNjUzSDUzOS40ODdDNjEyLjg3NCA1MzMuODgxIDY3My4wNDUgNDE3LjAwNyA3MjAgMzAyLjM3OVoiIGZpbGw9IiNGRkZDRTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM1ODYuNjYzIDIwNS4yMDIgNDA2LjY2MyA4OC4zMjc4IDE4MCAtNDguMjQyN0gzNjBDNTA4LjE1NiA3Ny41MjggNjI4LjE1NyAxOTQuNDAxIDcyMCAzMDIuMzc5WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuMzc5QzY3My4xNzggMTg3Ljc1MSA2MTMuMTc4IDcwLjg3NjcgNTQwIC00OC4yNDI3SDcyMEM3MjAgNjguNjMxMyA3MjAgMTg1LjUwNSA3MjAgMzAyLjM3OVoiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM3NjYuODIyIDE4Ny43NTEgODI2LjgyMiA3MC44NzY3IDkwMCAtNDguMjQyN0gxMDgwQzkzMS44NDQgNzcuNTI4IDgxMS44NDMgMTk0LjQwMSA3MjAgMzAyLjM3OVoiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MjAgMzAyLjM3OUM4NTMuMzM3IDIwNS4yMDIgMTAzMy4zNCA4OC4zMjc4IDEyNjAgLTQ4LjI0MjdIMTQ0MEMxMTI5LjcxIDEwMi44NjIgODg5LjcwNyAyMTkuNzM3IDcyMCAzMDIuMzc5WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuMzc5QzkxOS41NTIgMjM3LjUwOSAxMTU5LjU1IDE0OS45MzcgMTQ0MCAzOS42NjI0VjEyNy4yMzRDMTE4MS43MyAxOTkuMzE0IDk0MS43MyAyNTcuNjk2IDcyMCAzMDIuMzc5WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuMzc5Qzk1NS4zODggMjc5LjUxMyAxMTk1LjM5IDI1MC4yMTEgMTQ0MCAyMTQuNDc0VjMwMi4zNzlDMTIwMCAzMDIuMzc5IDk2MCAzMDIuMzc5IDcyMCAzMDIuMzc5WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuMzc5Qzk1NS4zODggMzI1LjI0NCAxMTk1LjM5IDM1NC41NDYgMTQ0MCAzOTAuMjg0VjQ3OC4xODlDMTE4MS43MyA0MDUuODM1IDk0MS43MyAzNDcuMjMxIDcyMCAzMDIuMzc5WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTcyMCAzMDIuMzc5QzkxOS41NTIgMzY3LjMxIDExNTkuNTUgNDU0Ljk2NiAxNDQwIDU2NS4zNDVWNjUzQzExMjkuNzEgNTAxLjg5NSA4ODkuNzA3IDM4NS4wMjEgNzIwIDMwMi4zNzlaIiBmaWxsPSIjRTk5OTk0Ii8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzIwIDMwMi4zNzlDODUzLjIxIDM5OS41NTUgMTAzMy4wNCA1MTYuNDI5IDEyNTkuNDkgNjUzSDEwNzkuNjZDOTMxLjY0MyA1MjcuMjI5IDgxMS43NTYgNDEwLjM1NSA3MjAgMzAyLjM3OVoiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik05MDAuNTEzIDY1M0g3MjBDNzIwIDUzNi4xMjYgNzIwIDQxOS4yNTMgNzIwIDMwMi4zNzlDNzY2Ljk1NSA0MTcuMDA3IDgyNy4xMjYgNTMzLjg4MSA5MDAuNTEzIDY1M1oiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik01NDAgNjUzSDM2MEM1MDguMTU2IDUyNy4yMjkgNjI4LjE1NyA0MTAuMzU1IDcyMCAzMDIuMzc5QzY3My4xNzggNDE3LjAwNyA2MTMuMTc4IDUzMy44ODEgNTQwIDY1M1oiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xODAgNjUzSDBDMzEwLjI5NCA1MDEuODk1IDU1MC4yOTMgMzg1LjAyMSA3MjAgMzAyLjM3OUM1ODYuNjYzIDM5OS41NTUgNDA2LjY2MyA1MTYuNDI5IDE4MCA2NTNaIiBmaWxsPSIjRTk5OTk0Ii8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMCA1NjUuMzQ1VjQ3Ny42ODlDMjU4LjI3IDQwNS41NDEgNDk4LjI3IDM0Ny4xMDQgNzIwIDMwMi4zNzlDNTIwLjQ0OCAzNjcuMzEgMjgwLjQ0NyA0NTQuOTY2IDAgNTY1LjM0NVoiIGZpbGw9IiNFOTk5OTQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDM5MC4wMzRWMzAyLjM3OUMyNDAgMzAyLjM3OSA0ODAgMzAyLjM3OSA3MjAgMzAyLjM3OUM0ODQuNjEyIDMyNS4xOCAyNDQuNjExIDM1NC4zOTggMCAzOTAuMDM0WiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTAgMjE0LjcyM1YxMjcuMDY4QzI1OC4yNyAxOTkuMjE2IDQ5OC4yNyAyNTcuNjUzIDcyMCAzMDIuMzc5QzQ4NC42MTIgMjc5LjU3OCAyNDQuNjExIDI1MC4zNTkgMCAyMTQuNzIzWiIgZmlsbD0iI0U5OTk5NCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTAgMzkuNDEyNlYtNDguMjQyN0MzMTAuMjk0IDEwMi44NjIgNTUwLjI5MyAyMTkuNzM3IDcyMCAzMDIuMzc5QzUyMC40NDggMjM3LjQ0NyAyODAuNDQ3IDE0OS43OTIgMCAzOS40MTI2WiIgZmlsbD0iI0U5OTk5NCIvPgo8L2c+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0iY2xpcDAiPgo8cmVjdCB3aWR0aD0iMTQ0MCIgaGVpZ2h0PSI2NTMiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg==),radial-gradient(500px, #fff, #fff1e1 20%, #ffa0b1);
        background-size: cover;
        background-position: center 60%;
    }

    .c-header-box .text {
        font-family: 'Luckiest Guy', sans-serif;
        -webkit-font-smoothing: antialiased;
        color: #c83b50;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 30px;
        line-height: 1.1;
        margin: 0 auto -15px;
    }

    .css-3h4u7j {
        display: inline-block;
        background: white;
        padding: 10px 16px;
        border-radius: 4px;
        -webkit-text-decoration: none;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        color: #c83b50;
        box-shadow: 0 8px 16px -4px rgb(200 59 80 / 50%);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        text-transform: uppercase;
        margin: 5px;
    }

    .css-1nh8p6y {
        vertical-align: -7px;
        margin-right: 5px;
    }

    .css-xiqz1k {
        color: #642f45;
        font-size: 22px;
        font-style: italic;
        font-weight: 500;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    b, strong {
        font-weight: bolder;
    }

    .css-1h2ur8y {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        background: #642f45;
        border-radius: 4px;
        color: #ffd3f8;
        font-family: Menlo,SFMono-Regular,Consolas,Liberation Mono,monospace;
        font-size: 14px;
        overflow: hidden;
        font-weight: normal;
        margin: 5px;
        max-width: 100%;
        overflow-x: auto;
    }

    .css-1122wx0 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.25);
        text-align: center;
        padding: 0 15px;
        color: white;
    }

    .css-ulso17 {
        padding: 10px 15px;
        white-space: nowrap;
        cursor: pointer;
    }
</style>
<div class="container">
    <header class="c-header-box">
        <img src="data:image/png;base64,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" alt="Popper logo" draggable="false" width="200" height="200" class="css-8exack e44rv92">
        <h2 class="c-header text">Globin<br> Light php framework for swoole engine</h2>
        <p class="css-xiqz1k e44rv90">Learn from <strong>Yii2 framework!</strong></p>
        <div class="css-1bkpu5b">
            <a href="https://github.com/popperjs/popper-core" rel="nofollow noreferrer" class="css-3h4u7j">
                <svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="css-1nh8p6y">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg> Star on GitHub</a>
            <a class="css-3h4u7j" href="/docs/v2/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="css-1nh8p6y">
                    <polyline points="4 17 10 11 4 5"></polyline>
                    <line x1="12" y1="19" x2="20" y2="19"></line>
                </svg>Documentation</a>
        </div>
    </header>
    <div class="css-1l4rj6q eie7key6">

        <div class="css-c99ej eie7key5">
            <div class="css-1h2ur8y eie7key4">
                <div class="css-1122wx0 eie7key3">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI1NDBweCIgaGVpZ2h0PSIyMTBweCIgdmlld0JveD0iMCAwIDE4IDciPgo8cGF0aCBmaWxsPSIjQ0IzODM3IiBkPSJNMCwwaDE4djZIOXYxSDVWNkgwVjB6IE0xLDVoMlYyaDF2M2gxVjFIMVY1eiBNNiwxdjVoMlY1aDJWMUg2eiBNOCwyaDF2Mkg4VjJ6IE0xMSwxdjRoMlYyaDF2M2gxVjJoMXYzaDFWMUgxMXoiLz4KPHBvbHlnb24gZmlsbD0iI0ZGRkZGRiIgcG9pbnRzPSIxLDUgMyw1IDMsMiA0LDIgNCw1IDUsNSA1LDEgMSwxICIvPgo8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNNiwxdjVoMlY1aDJWMUg2eiBNOSw0SDhWMmgxVjR6Ii8+Cjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iMTEsMSAxMSw1IDEzLDUgMTMsMiAxNCwyIDE0LDUgMTUsNSAxNSwyIDE2LDIgMTYsNSAxNyw1IDE3LDEgIi8+Cjwvc3ZnPgo=" width="50" height="20" alt="npm logo" draggable="false" class="css-1d7txa7 eie7key2"></div>
                <div class="css-ulso17 eie7key1">composer required toom1996/yiis</div>
                <div style="opacity: 0; visibility: visible; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(404px, 606px, 0px);" class="css-1mrz8g6 evfaqp91" data-popper-escaped="" data-popper-placement="bottom">
                    <div class="css-d0rosp eie7key0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>Copied to clipboard!</div>
                    <div data-popper-arrow="true" class="css-15g7enh evfaqp90" style="position: absolute; left: 0px; transform: translate3d(86px, 0px, 0px);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>