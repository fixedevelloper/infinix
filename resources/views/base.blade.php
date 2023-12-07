<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Infinix force </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name"
          content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="author" content="thetork">
    <meta name="keywords" content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="description"
          content="">

    <!-- OG meta data -->
    <meta property="og:title"
          content="">
    <meta property="og:site_name" content=Infinix>
    <meta property="og:url" content="https://infinixforce.io/">
    <meta property="og:description"
          content="Welcome to Infinix,">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og.png">

    <link rel="shortcut icon" href="{{asset('images/preview.svg')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>

<!-- ===============>> Preloader start here <<================= -->
<div class="preloader">
    <img src="{{asset('images/preview.svg')}}" alt="preloader icon">
</div>
<!-- ===============>> Preloader end here <<================= -->
@include('_partials._header')
@yield('content')
@include('_partials._footer')

<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->



<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- vendor plugins -->
@stack('scripts')
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/fslightbox.js')}}"></script>
<script src="{{asset('js/purecounter_vanilla.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>
<script>
    $(document).ready(function(){
        var myModal = document.getElementById('myModal')
        myModal.addEventListener('shown.bs.modal', function () {
            //myInput.focus()
        })
       // document.getElementById("myModal").modal('show');
    });
</script>

{{--<script type="module">
    import { WalletConnectModalAuth } from "https://unpkg.com/@walletconnect/modal-auth-html@2.6.1";

    // 1. Define ui elements
    const connectButton = document.getElementById("connect-button");

    // 2. Create modal client, add your project id
    const modal = new WalletConnectModalAuth({
        projectId: "f1f40df67ff5b05ad89591f3b8d39f6c",
        metadata: {
            name: "INFINIX",
            description: "My Dapp description",
            url: "http://localhost",
            icons: ["http://localhost/logo.png"],
        },
    });

    // 3. Sign In
     function onSignIn() {
        try {
            connectButton.disabled = true;
            const data =  modal.signIn({
                statement: "Sign In to My Dapp",
            });
            console.info(data);
        } catch (err) {
            console.error(err);
        } finally {
            connectButton.disabled = false;
        }
    }

    // 4. Create connection handler
    connectButton.addEventListener("click", onSignIn);
</script>
<script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
<script>
    const sdk = new MetaMaskSDK.MetaMaskSDK({
        dappMetadata: {
            name: "Pure JS example",
            url: window.location.host,
        },
        logging: {
            sdk: false,
        }
    });
</script>
<script>
    function connect() {
        ethereum
            .request({
                method: 'eth_requestAccounts',
                params: [],
            })
            .then((res) => console.log('request accounts', res))
            .catch((e) => console.log('request accounts ERR', e));
    }

    function addEthereumChain() {
        ethereum
            .request({
                method: 'wallet_addEthereumChain',
                params: [
                    {
                        chainId: '0x89',
                        chainName: 'Polygon',
                        blockExplorerUrls: ['https://polygonscan.com'],
                        nativeCurrency: { symbol: 'MATIC', decimals: 18 },
                        rpcUrls: ['https://polygon-rpc.com/'],
                    },
                ],
            })
            .then((res) => console.log('add', res))
            .catch((e) => console.log('ADD ERR', e));
    }
</script>--}}
{{--<script type="module">
    import {
        EthereumClient,
        w3mConnectors,
        w3mProvider,
        WagmiCore,
        WagmiCoreChains,
        WagmiCoreConnectors,
    } from "https://unpkg.com/@web3modal/ethereum@2.7.1";

    import { Web3Modal } from "https://unpkg.com/@web3modal/html@2.7.1";

    // 0. Import wagmi dependencies
    const { mainnet, polygon, avalanche, arbitrum } = WagmiCoreChains;
    const { configureChains, createConfig } = WagmiCore;

    // 1. Define chains
    const chains = [mainnet, polygon, avalanche, arbitrum];
    const projectId = "f1f40df67ff5b05ad89591f3b8d39f6c";

    // 2. Configure wagmi client
    const { publicClient } = configureChains(chains, [w3mProvider({ projectId })]);
    const wagmiConfig = createConfig({
        autoConnect: true,
        connectors: [
            ...w3mConnectors({ chains, version: 2, projectId }),
            new WagmiCoreConnectors.CoinbaseWalletConnector({
                chains,
                options: {
                    appName: "html wagmi example",
                },
            }),
        ],
        publicClient,
    });

    // 3. Create ethereum and modal clients
    const ethereumClient = new EthereumClient(wagmiConfig, chains);
    export const web3Modal = new Web3Modal(
        {
            projectId,
            walletImages: {
                safe: "https://pbs.twimg.com/profile_images/1566773491764023297/IvmCdGnM_400x400.jpg",
            },
        },
        ethereumClient
    );
</script>--}}
</body>

</html>
