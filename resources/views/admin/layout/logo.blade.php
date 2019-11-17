<a href="{{ url('admin') }}" class="navbar-brand">
    {{-- You may use plain text as a logo instead of image --}}
    {{-- <img src="data:image/svg+xml;base64,PHN2ZyAKIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIgogd2lkdGg9IjIwOHB4IiBoZWlnaHQ9IjM3cHgiPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiICBmaWxsPSIjNDI3M0ZBIgogZD0iTTE5MS4zMjQsMjUuODY3IEMxOTEuODYxLDI4LjUxNiAxOTQuNTc4LDMwLjA2NiAxOTcuMzkwLDI5LjY1MSBDMjAwLjAxNSwyOS4yNjQgMjAxLjMwOCwyNy44MDYgMjAxLjcwMSwyNS44NDcgTDIwOC4wMTMsMjYuNjczIEMyMDcuNDcyLDMwLjk0MiAyMDQuMjExLDM0LjkzMCAxOTguMjAzLDM1LjgxNSBDMTkxLjY2NywzNi43NzggMTg1LjE2MCwzMi45NjMgMTgzLjk4NiwyNC45OTkgQzE4Mi44NjIsMTcuMzY5IDE4Ny44MTgsMTEuNjcwIDE5My45NjksMTAuNzYzIEMyMDEuMzE4LDkuNjgwIDIwNi41MTQsMTMuNTQyIDIwNy42MzksMjEuMTcyIEMyMDcuNzg2LDIyLjE3NCAyMDcuODU1LDIzLjI4NCAyMDcuODI5LDIzLjQzNSBMMTkxLjMyNCwyNS44NjcgWk0xOTQuOTExLDE2LjQ3MiBDMTkxLjg1OCwxNi45MjIgMTkwLjY2MiwxOS4zODcgMTkwLjc4MCwyMS4xNzMgTDIwMC4yNzAsMTkuNzc0IEMxOTkuOTExLDE3Ljk3NSAxOTguMzQ0LDE1Ljk2NiAxOTQuOTExLDE2LjQ3MiBaTTE3Mi43NzAsMC40MDUgTDE4MC4xMDAsMC40MDUgTDE4MC4xMDAsMzUuMzAzIEwxNzIuNzcwLDM1LjMwMyBMMTcyLjc3MCwwLjQwNSBaTTE1Ny41NzAsMzUuODMzIEMxNTQuMzg3LDM1LjgzMyAxNTEuOTI5LDM0LjQzNiAxNTAuODE4LDMyLjYwMyBMMTUwLjgxOCwzNS4zMDMgTDE0My43MzIsMzUuMzAzIEwxNDMuNzMyLDAuNDA1IEwxNTAuOTE2LDAuNDA1IEwxNTAuOTE2LDEzLjYxMiBDMTUxLjkyOSwxMi4xMTcgMTU0LjU3OSwxMC43NjkgMTU3Ljg1NywxMC43NjkgQzE2NC44MDEsMTAuNzY5IDE2OC45OTQsMTYuMDcxIDE2OC45OTQsMjMuMjUxIEMxNjguOTk0LDMwLjU3OSAxNjQuMjcyLDM1LjgzMyAxNTcuNTcwLDM1LjgzMyBaTTE1Ni4yNjcsMTcuMzczIEMxNTMuNDIxLDE3LjM3MyAxNTAuODE4LDE5LjI1MiAxNTAuODE4LDIzLjMwMSBDMTUwLjgxOCwyNy4yNTMgMTUzLjQyMSwyOS4yNzggMTU2LjI2NywyOS4yNzggQzE1OS4xMTMsMjkuMjc4IDE2MS42NjUsMjcuMzAyIDE2MS42NjUsMjMuMzAxIEMxNjEuNjY1LDE5LjI1MiAxNTkuMTEzLDE3LjM3MyAxNTYuMjY3LDE3LjM3MyBaTTEzMi45MTcsMzIuNjAzIEMxMzEuNjY0LDM0LjYyOCAxMjkuMzQ5LDM1Ljk3OCAxMjYuMTY5LDM1Ljk3OCBDMTIwLjkxMiwzNS45NzggMTE3Ljg3NCwzMi41MDcgMTE3Ljg3NCwyOC42OTkgQzExNy44NzQsMjQuNDU3IDEyMS4wMTAsMjIuMDQ3IDEyNC45NjMsMjEuNDcwIEwxMzAuNjA1LDIwLjYwMSBDMTMxLjkwNCwyMC40MDggMTMyLjM0MCwxOS43ODIgMTMyLjM0MCwxOC45NjIgQzEzMi4zNDAsMTcuNTY0IDEzMS4xMzUsMTYuMzYwIDEyOC44MTgsMTYuMzYwIEMxMjYuMjYzLDE2LjM2MCAxMjQuODY1LDE4LjA5NCAxMjQuNzIwLDE5Ljg3OSBMMTE4LjM1NywxOC41NzcgQzExOC42NDcsMTUuMTU1IDEyMS44MjcsMTAuNjIzIDEyOC44NjksMTAuNjIzIEMxMzYuNjMxLDEwLjYyMyAxMzkuNDczLDE0Ljk2MiAxMzkuNDczLDE5Ljg3OSBMMTM5LjQ3MywzMS41OTIgQzEzOS40NzMsMzMuNDcyIDEzOS43MTYsMzUuMDYyIDEzOS43NjMsMzUuMzAzIEwxMzMuMTYwLDM1LjMwMyBDMTMzLjEwOSwzNS4xMTEgMTMyLjkxNywzNC4yNDMgMTMyLjkxNywzMi42MDMgWk0xMzIuMzQwLDI0Ljg0MyBMMTI3LjgwNiwyNS41NjUgQzEyNi4yNjMsMjUuODA3IDEyNS4xMDksMjYuNTMxIDEyNS4xMDksMjguMjE3IEMxMjUuMTA5LDI5LjQ3MSAxMjUuOTI1LDMwLjY3NiAxMjcuOTUxLDMwLjY3NiBDMTMwLjEyMiwzMC42NzYgMTMyLjM0MCwyOS42MTYgMTMyLjM0MCwyNS45MDMgTDEzMi4zNDAsMjQuODQzIFpNMTA5LjIzNywyNi43MjMgQzEwOS4yMzcsMjguNjk5IDExMC4yOTcsMjkuMjI5IDExMS44OTEsMjkuMjI5IEMxMTIuNjYwLDI5LjIyOSAxMTMuMzgzLDI5LjA4NCAxMTMuODE4LDI4Ljk4OCBMMTEzLjgxOCwzNS4wNjIgQzExMy41MjgsMzUuMjA3IDExMi4zMjMsMzUuNzM2IDExMC4wMTAsMzUuNzM2IEMxMDUuMDQ1LDM1LjczNiAxMDIuMDA2LDMyLjc5NyAxMDIuMDA2LDI4LjAyNCBMMTAyLjAwNiwxNy43NTcgTDEwMC4wNDEsMTcuNzU3IEw5Ny43NjIsMTcuNzU3IEw5Mi4xMjMsMTcuNzU3IEw5Mi4xMjMsMzUuMzAzIEw4NC43OTQsMzUuMzAzIEw4NC43OTQsMTcuNTE2IEw4MC45ODYsMTcuNTE2IEw4MC45ODYsMTEuMzQ2IEw4NC43OTQsMTEuMzQ2IEw4NC43OTQsOS4yNzMgQzg0Ljc5NCwzLjc3OSA4OC4xMjMsMC4wMTkgOTMuOTU2LDAuMDE5IEM5NS40NDgsMC4wMTkgOTYuNzUxLDAuMjExIDk3LjQyNiwwLjU0OCBMOTcuNDI2LDYuNTI2IEM5Ny4wNDIsNi40MzAgOTYuNDE0LDYuMjg1IDk1LjI1Niw2LjI4NSBDOTMuOTU2LDYuMjg1IDkyLjEyMyw2Ljg2MyA5Mi4xMjMsOS41MTUgTDkyLjEyMywxMS4zNDYgTDk3LjMyOCwxMS4zNDYgTDk3Ljc2MiwxMS4zNDYgTDk4Ljk2NywxMS4zNDYgQzEwMS40NzYsMTEuMzQ2IDEwMi42ODEsOS42NjAgMTAyLjY4MSw3LjQ0MiBMMTAyLjY4MSw0LjM1OCBMMTA5LjIzNyw0LjM1OCBMMTA5LjIzNywxMS4zNDYgTDExMy45MTIsMTEuMzQ2IEwxMTMuOTEyLDE3Ljc1NyBMMTA5LjIzNywxNy43NTcgTDEwOS4yMzcsMjYuNzIzIFpNNzEuOTEwLDMyLjYwMyBDNzAuNjU3LDM0LjYyOCA2OC4zNDEsMzUuOTc4IDY1LjE2MSwzNS45NzggQzU5LjkwNSwzNS45NzggNTYuODY2LDMyLjUwNyA1Ni44NjYsMjguNjk5IEM1Ni44NjYsMjQuNDU3IDYwLjAwMywyMi4wNDcgNjMuOTU2LDIxLjQ3MCBMNjkuNTk3LDIwLjYwMSBDNzAuODk3LDIwLjQwOCA3MS4zMzIsMTkuNzgyIDcxLjMzMiwxOC45NjIgQzcxLjMzMiwxNy41NjQgNzAuMTI3LDE2LjM2MCA2Ny44MTEsMTYuMzYwIEM2NS4yNTYsMTYuMzYwIDYzLjg1OCwxOC4wOTQgNjMuNzEzLDE5Ljg3OSBMNTcuMzQ5LDE4LjU3NyBDNTcuNjQwLDE1LjE1NSA2MC44MTksMTAuNjIzIDY3Ljg2MiwxMC42MjMgQzc1LjYyMywxMC42MjMgNzguNDY2LDE0Ljk2MiA3OC40NjYsMTkuODc5IEw3OC40NjYsMzEuNTkyIEM3OC40NjYsMzMuNDcyIDc4LjcwOSwzNS4wNjIgNzguNzU2LDM1LjMwMyBMNzIuMTUzLDM1LjMwMyBDNzIuMTAyLDM1LjExMSA3MS45MTAsMzQuMjQzIDcxLjkxMCwzMi42MDMgWk03MS4zMzIsMjQuODQzIEw2Ni43OTgsMjUuNTY1IEM2NS4yNTYsMjUuODA3IDY0LjEwMSwyNi41MzEgNjQuMTAxLDI4LjIxNyBDNjQuMTAxLDI5LjQ3MSA2NC45MTgsMzAuNjc2IDY2Ljk0MywzMC42NzYgQzY5LjExNSwzMC42NzYgNzEuMzMyLDI5LjYxNiA3MS4zMzIsMjUuOTAzIEw3MS4zMzIsMjQuODQzIFpNNTEuMzU5LDE4LjMzNiBDNDguNDE4LDE4LjMzNiA0NS43NjksMjAuMDcwIDQ1Ljc2OSwyNC44NDMgTDQ1Ljc2OSwzNS4zMDMgTDM4LjQzOSwzNS4zMDMgTDM4LjQzOSwxMS4zNDYgTDQ1LjUyNSwxMS4zNDYgTDQ1LjUyNSwxNC41NzYgQzQ2Ljc4MSwxMS44NzggNDkuODE2LDExLjEwNyA1MS43NDMsMTEuMTA3IEM1Mi40NzAsMTEuMTA3IDUzLjE5MiwxMS4yMDMgNTMuNjc1LDExLjM0NiBMNTMuNjc1LDE4LjU3NyBDNTIuODU0LDE4LjM4NSA1Mi4wODEsMTguMzM2IDUxLjM1OSwxOC4zMzYgWk0xNy43MzksMjguNDExIEMyMy42NjcsMjguNDExIDI2LjAzMCwyNC40NTcgMjYuNzA1LDIyLjAwMCBMMzMuOTgzLDI0LjA3MiBDMzIuODc2LDI4Ljc5NSAyOC4zNDYsMzYuMDI1IDE3LjczOSwzNi4wMjUgQzcuOTAxLDM2LjAyNSAtMC4wMDUsMjguOTQxIC0wLjAwNSwxOC4yODcgQy0wLjAwNSw3LjYzNSA4LjA5MywwLjQwNSAxNy42NDEsMC40MDUgQzI3LjkxMCwwLjQwNSAzMi40NDEsNy4wMDkgMzMuNTUyLDExLjkyNSBMMjYuMzY4LDE0LjE5MSBDMjUuODM4LDExLjgyOSAyMy42NjcsNy44MjggMTcuNjQxLDcuODI4IEMxMy4wNTksNy44MjggNy45MDEsMTEuMTA3IDcuOTAxLDE4LjI4NyBDNy45MDEsMjQuNjk4IDEyLjYyOCwyOC40MTEgMTcuNzM5LDI4LjQxMSBaIi8+Cjwvc3ZnPg==" alt="Craftable"> --}}

    {{--Text Logo--}}
    EgyptExcursions
</a>