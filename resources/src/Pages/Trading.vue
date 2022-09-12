<template>
    <div class="trading-page">
        <grid-layout
            :layout.sync="layout"
            :responsive-layouts="layouts"
            :col-num="12"
            :row-height="50"
            :is-draggable="draggable"
            :is-resizable="resizable"
            :vertical-compact="true"
            :use-css-transforms="true"
            :responsive="responsive"
        >
            <grid-item
                :x="layout[0].x"
                :y="layout[0].y"
                :w="layout[0].w"
                :h="layout[0].h"
                :i="layout[0].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked tabbable rounded shadow"
                style="overflow-y: auto; overflow-x: hidden"
            >
                <Markets v-if="pairs != null" :pairs="pairs" />
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[1].x"
                :y="layout[1].y"
                :w="layout[1].w"
                :h="layout[1].h"
                :i="layout[1].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked tabbable rounded shadow"
                style="overflow-y: auto; overflow-x: hidden"
            >
                <Trades
                    :key="
                        this.$route.params.symbol + this.$route.params.currency
                    "
                />
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[2].x"
                :y="layout[2].y"
                :w="layout[2].w"
                :h="layout[2].h"
                :i="layout[2].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked rounded shadow"
            >
                <Marketinfo
                    :key="
                        this.$route.params.symbol + this.$route.params.currency
                    "
                />
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[3].x"
                :y="layout[3].y"
                :w="layout[3].w"
                :h="layout[3].h"
                :i="layout[3].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked rounded shadow"
            >
                <template v-if="ext.eco == 1">
                    <EcoTradingview
                        :key="
                            this.$route.params.symbol +
                            this.$route.params.currency
                        "
                    />
                </template>
                <template v-else>
                    <Tradingview
                        v-if="provide != null"
                        :provide="provide"
                        :key="
                            this.$route.params.symbol +
                            this.$route.params.currency
                        "
                    />
                </template>
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[4].x"
                :y="layout[4].y"
                :w="layout[4].w"
                :h="layout[4].h"
                :i="layout[4].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked rounded shadow"
            >
                <Order
                    v-if="limit != null"
                    :limits="limits"
                    :limit="limit"
                    :fee="fee"
                    :pfee="pfee"
                    :api="api"
                    :bid="bid"
                    :ask="ask"
                    :key="
                        this.$route.params.symbol + this.$route.params.currency
                    "
                    @OrderPlaced="renderOrders()"
                />
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[5].x"
                :y="layout[5].y"
                :w="layout[5].w"
                :h="layout[5].h"
                :i="layout[5].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked rounded shadow"
            >
                <Orderbook
                    @bestAsk="setBestAsk"
                    @bestBid="setBestBid"
                    :key="
                        this.$route.params.symbol + this.$route.params.currency
                    "
                />
                <span class="vue-draggable-handle"></span>
            </grid-item>
            <grid-item
                :x="layout[6].x"
                :y="layout[6].y"
                :w="layout[6].w"
                :h="layout[6].h"
                :i="layout[6].i"
                drag-allow-from=".vue-draggable-handle"
                drag-ignore-from=".no-drag"
                class="darked rounded shadow"
            >
                <Orders
                    :key="
                        this.$route.params.symbol +
                        this.$route.params.currency +
                        ordersRender
                    "
                ></Orders>
                <span class="vue-draggable-handle"></span>
            </grid-item>
        </grid-layout>
    </div>
</template>

<script>
import { GridLayout, GridItem } from "vue-grid-layout";
import Markets from "../components/trading/Markets.vue";
import Trades from "../components/trading/Trades.vue";
import Marketinfo from "../components/trading/Marketinfo.vue";
import Tradingview from "../components/trading/Tradingview.vue";
import EcoTradingview from "../components/eco/Tradingview.vue";
import Order from "../components/trading/Order.vue";
import Orders from "../components/trading/Orders.vue";
import Orderbook from "../components/trading/Orderbook.vue";

let testLayouts = {
    xs: [
        { x: 0, y: 17, w: 2, h: 7, i: "0" }, // Markets
        { x: 0, y: 13, w: 2, h: 7, i: "1" }, // Trades
        { x: 0, y: 0, w: 6, h: 1, i: "2" }, // Marketinfo
        { x: 0, y: 1, w: 4, h: 6, i: "3" }, // Tradingview
        { x: 0, y: 7, w: 4, h: 6, i: "4" }, // Order
        { x: 2, y: 13, w: 2, h: 14, i: "5" }, // Orderbook
        { x: 0, y: 20, w: 6, h: 8, i: "6" }, // Orders
    ],
    sm: [
        { x: 0, y: 16, w: 3, h: 8, i: "0" }, // Markets
        { x: 3, y: 16, w: 3, h: 8, i: "1" }, // Trades
        { x: 0, y: 0, w: 6, h: 2, i: "2" }, // Marketinfo
        { x: 0, y: 2, w: 4, h: 8, i: "3" }, // Tradingview
        { x: 0, y: 10, w: 4, h: 6, i: "4" }, // Order
        { x: 4, y: 2, w: 2, h: 14, i: "5" }, // Orderbook
        { x: 0, y: 24, w: 6, h: 8, i: "6" }, // Orders
    ],
    md: [
        { x: 0, y: 0, w: 3, h: 8, i: "0" }, // Markets
        { x: 0, y: 10, w: 3, h: 8, i: "1" }, // Trades
        { x: 3, y: 0, w: 7, h: 2, i: "2" }, // Marketinfo
        { x: 3, y: 2, w: 5, h: 8, i: "3" }, // Tradingview
        { x: 3, y: 10, w: 5, h: 6, i: "4" }, // Order
        { x: 8, y: 4, w: 2, h: 14, i: "5" }, // Orderbook
        { x: 0, y: 18, w: 10, h: 8, i: "6" }, // Orders
    ],
    lg: [
        { x: 0, y: 0, w: 3, h: 8, i: "0" }, // Markets
        { x: 0, y: 10, w: 3, h: 8, i: "1" }, // Trades
        { x: 3, y: 0, w: 6, h: 2, i: "2" }, // Marketinfo
        { x: 3, y: 2, w: 6, h: 8, i: "3" }, // Tradingview
        { x: 3, y: 10, w: 6, h: 6, i: "4" }, // Order
        { x: 9, y: 0, w: 3, h: 16, i: "5" }, // Orderbook
        { x: 0, y: 18, w: 12, h: 8, i: "6" }, // Orders
    ],
};

export default {
    // component list
    components: {
        Markets,
        Trades,
        Marketinfo,
        Tradingview,
        EcoTradingview,
        Order,
        Orders,
        Orderbook,
        GridLayout,
        GridItem,
    },

    // component data
    data() {
        return {
            symbol: this.$route.params.symbol,
            currency: this.$route.params.currency,
            provider: null,
            provide: null,
            pairs: null,
            limits: null,
            limit: null,
            fee: null,
            pfee: null,
            layouts: testLayouts,
            layout: testLayouts["lg"],
            draggable: true,
            resizable: true,
            responsive: true,
            ask: null,
            bid: null,
            api: 1,
            index: 0,
            ordersRender: 0,
            ext: ext,
        };
    },
    watch: {
        eventLog: function () {
            const eventsDiv = this.$refs.eventsDiv;
            eventsDiv.scrollTop = eventsDiv.scrollHeight;
        },
        async $route(to, from) {
            const connection =
                exchange.clients[Object.keys(exchange.clients)[1]];
            for (var key in connection.subscriptions) {
                const message = {
                    id: this.getRandomInt(0, 1000).toString(),
                    type: "unsubscribe",
                    topic: key,
                    privateChannel: false,
                    response: true,
                };
                connection.send(message);
            }
            await exchange.close();
            $("asks").empty();
            $("bids").empty();
            $("tradeTable").empty();
        },
    },

    // custom methods
    methods: {
        getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min)) + min;
        },
        renderOrders() {
            this.ordersRender += 1;
        },
        setBestAsk(value) {
            this.ask = value;
        },
        setBestBid(value) {
            this.bid = value;
        },
        isActive(menuItem) {
            return this.activeItem === menuItem;
        },
        setActive(menuItem) {
            this.activeItem = menuItem;
        },
        fetchData() {
            this.$http
                .post(
                    "/user/trade/" +
                        this.$route.params.symbol +
                        "/" +
                        this.$route.params.currency
                )
                .then((response) => {
                    (this.provider = response.data.provider),
                        (this.provide = response.data.provide),
                        (this.pairs = response.data.pairs),
                        (this.limits = response.data.limits),
                        (this.limit = response.data.limit),
                        (this.api = response.data.api),
                        (this.fee = response.data.fee),
                        (this.pfee = response.data.pfee);
                })
                .catch((error) => {
                    if (error.response.data.message == "nokyc") {
                        window.location.href = "/user/kyc";
                    }
                });
        },
        goBack() {
            window.history.length > 1
                ? this.$router.go(-1)
                : this.$router.push("/");
        },
    },

    created() {
        this.fetchData();
    },
    mounted() {
        window.addEventListener("hashchange", (e) => {
            this.fetchData();
        });
        window.addEventListener("load", (e) => {
            this.fetchData();
        });
    },
    // on component destroyed
    destroyed() {},
};
</script>
<style lang="scss" scope>
$dark: #171b29;
$light: #d5f0e9;
$ease-out-expo: cubic-bezier(0.005, 1, 0.22, 1);

:root {
    --theme-background-base: #{lighten($dark, 0%)};
    --theme-background-300: #{lighten($dark, 75%)};
    --theme-background-o75: #{rgba(lighten($dark, 10%), 0.75)};
    --theme-background-o20: #{rgba(lighten($dark, 10%), 0.2)};
    --theme-color-o75: #{rgba($light, 0.75)};
}

table {
    border-collapse: collapse;
    width: 100%;
    font-size: 11px;
    font-weight: 500;
    color: #b7bdc6;
    overflow: hidden;
    width: 100%;
}
.tdd {
    position: relative;
    height: 18px;
    line-height: 18px;
}
td {
    height: 12px;
    line-height: 12px;
    span {
        position: relative;
        z-index: 2;
    }
    .percent {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
    }
}
td.price {
    width: 30%;
    span {
        padding-left: 5px;
    }
}
td.quantity {
    width: 30%;
    text-align: right;
}
td.time {
    width: 40%;
    text-align: right;
    color: #999;
    padding-right: 5px;
}
td.btc {
    width: 40%;
    text-align: right;
    padding-right: 5px;
}
table.asks {
    .percent {
        background-color: rgba(246, 70, 94, 0.2);
    }
}
table.bids {
    .percent {
        background-color: rgba(14, 203, 129, 0.2);
    }
}
table.asks_only {
    .percent {
        background-color: rgba(246, 70, 94, 0.2);
    }
}
table.bids_only {
    .percent {
        background-color: rgba(14, 203, 129, 0.2);
    }
}
.order-loader {
    position: relative;
    right: 0px;
    top: 120px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: #000000b5;
}
.se-pre-con2 {
    position: absolute;
    top: 50%;
    left: 50%;
}
.hidden {
    display: none;
}
@media (max-width: 767.98px) {
    html {
        body.navbar-sticky {
            .app-content {
                padding: calc(1rem - 0.8rem + 4.45rem) 0 0 0 !important;
            }
        }
    }
}
</style>
