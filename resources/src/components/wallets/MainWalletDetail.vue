<template>
    <div>
        <div class="card mb-1">
            <div class="card-body">
                <div
                    class="d-flex align-items-center"
                    :class="
                        plat.trading.practice != null &&
                        plat.trading.practice != 1
                            ? ' justify-content-between'
                            : ' justify-content-start'
                    "
                >
                    <img
                        v-if="wal.symbol != null"
                        class="avatar-content me-1 d-none d-sm-block"
                        :src="
                            wal.symbol
                                ? '/assets/images/cryptoCurrency/' +
                                  wal.symbol.toLowerCase() +
                                  '.png'
                                : '/market/notification.png'
                        "
                    />
                    <vue-skeleton-loader
                        v-else
                        type="circle"
                        :width="64"
                        :height="64"
                        animation="fade"
                    />
                    <span
                        v-if="wal.symbol != null"
                        class="fw-bold fs-4 d-none d-lg-block"
                        >{{ wal.symbol }}
                        <span v-if="api == 1">{{ type.toUpperCase() }} </span
                        >Wallet</span
                    >
                    <vue-skeleton-loader
                        v-else
                        class="d-none d-lg-block"
                        type="rect"
                        :width="100"
                        :height="10"
                        animation="fade"
                    />
                    <div
                        class="d-flex justify-content-start"
                        v-if="
                            plat.trading.practice != null &&
                            plat.trading.practice != 1
                        "
                    >
                        <button
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#depositMain"
                            class="btn btn-success"
                        >
                            <i class="bi bi-wallet2"></i> Deposit
                        </button>
                        <div v-if="api || api == 1">
                            <button
                                v-if="type == 'trading'"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#transfer_trading"
                                class="btn btn-warning ms-1"
                            >
                                <i class="bi bi-arrow-left-right"></i>
                                Transfer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card mb-0" id="table-hover-row" style="overflow: auto">
                <div class="card-header">
                    <h4 class="card-title">Wallet Transactions</h4>
                </div>
                <div
                    class="table-responsive"
                    style="min-height: 57vh; max-height: 57vh; overflow-y: auto"
                >
                    <table class="table tableFixHead">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Info</th>
                                <th>Transaction</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody
                            v-if="wal_trx != null && wal_trx.length > 0"
                            :key="wal_trx.length"
                        >
                            <tr v-for="(trx, index) in wal_trx" :key="index">
                                <td>
                                    <div
                                        class="avatar bg-light-primary rounded float-start"
                                        style="max-height: 30px"
                                    >
                                        <div class="avatar-content">
                                            <i
                                                v-if="
                                                    trx.operationType ==
                                                    'DEPOSIT'
                                                "
                                                class="text-success fs-3 bi bi-wallet2"
                                            ></i>
                                            <span
                                                v-else-if="
                                                    trx.operationType ==
                                                    'WITHDRAWAL'
                                                "
                                                class="text-danger fs-3"
                                                ><i class="bi bi-cash"></i
                                            ></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="text-warning">
                                            Amount:
                                        </span>

                                        <span v-if="trx.amount != 0">
                                            {{ trx.amount | toMoney(4) }}
                                            {{ wal.symbol }}
                                        </span>
                                    </div>
                                    <div>
                                        <span class="text-warning">
                                            Value (USD):
                                        </span>
                                        {{
                                            trx.marketValue.amount | toMoney(4)
                                        }}
                                    </div>
                                    <div>
                                        <span class="text-warning"
                                            >Reference ID:
                                        </span>
                                        {{ trx.reference }}
                                    </div>
                                </td>
                                <td>
                                    <div
                                        v-if="trx.operationType == 'DEPOSIT'"
                                        class="avatar-group"
                                    >
                                        <span class="text-success fs-3"
                                            ><i class="bi bi-wallet2"></i
                                        ></span>
                                        <div
                                            class="my-0 mx-2 text-success fs-3 ms-q"
                                            style=""
                                        >
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                        <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            :title="trx.symbol"
                                        >
                                            <img
                                                class="avatar-content"
                                                :src="
                                                    trx.symbol
                                                        ? '/assets/images/cryptoCurrency/' +
                                                          trx.symbol.toLowerCase() +
                                                          '.png'
                                                        : '/market/notification.png'
                                                "
                                                alt="Avatar"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        v-else-if="
                                            trx.operationType == 'WITHDRAWAL'
                                        "
                                        class="avatar-group"
                                    >
                                        <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            :title="trx.address"
                                        >
                                            <img
                                                class="avatar-content"
                                                :src="
                                                    wal.symbol
                                                        ? '/assets/images/cryptoCurrency/' +
                                                          wal.symbol.toLowerCase() +
                                                          '.png'
                                                        : '/market/notification.png'
                                                "
                                                alt="Avatar"
                                            />
                                        </div>
                                        <div
                                            class="my-0 mx-2 text-success fs-3 ms-1"
                                            style=""
                                        >
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                        <span class="text-success fs-3"
                                            ><i class="bi bi-wallet2"></i
                                        ></span>
                                    </div>
                                </td>
                                <td>
                                    {{ trx.created | toDate }}
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td
                                    class="text-muted text-center"
                                    colspan="100%"
                                >
                                    <img
                                        height="128px"
                                        width="128px"
                                        src="https://assets.staticimg.com/pro/2.0.4/images/empty.svg"
                                        alt=""
                                    />
                                    <p class="">No Data Found</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div
            class="modal fade"
            id="depositMain"
            tabindex="-1"
            aria-labelledby="depositMain"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div v-if="addresses != null" class="modal-content">
                    <div class="modal-header bg-transparent">
                        <h5 class="modal-title">Select Deposit Network</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li
                            v-for="(wallet, key, index) in addresses"
                            :key="index"
                            class="nav-item"
                        >
                            <a
                                class="nav-link"
                                :class="index == 0 ? 'active' : ''"
                                :id="key + '-tab'"
                                data-bs-toggle="tab"
                                :href="'#' + key"
                                role="tab"
                                aria-selected="false"
                                >{{ key }}</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div
                            v-for="(wallet, key, index) in addresses"
                            :key="index"
                            class="tab-pane"
                            :class="index == 0 ? 'active' : ''"
                            :id="key"
                            role="tabpanel"
                        >
                            <form
                                class="add-new-record modal-content pt-0"
                                @submit.prevent="DepositMain()"
                            >
                                <div class="modal-body pb-3 px-sm-3">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-5">
                                            <div>
                                                <label
                                                    class="form-control-label h6"
                                                    >To</label
                                                >
                                            </div>
                                            <qr-code
                                                :size="150"
                                                :text="
                                                    wallet.address
                                                        ? wallet.address
                                                        : ''
                                                "
                                            ></qr-code>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <div>
                                                <label
                                                    class="form-control-label h6"
                                                    for="recieving_address"
                                                    >Wallet Address</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    ref="
                                                            recieving_address
                                                        "
                                                    :value="
                                                        wallet.address
                                                            ? wallet.address
                                                            : ''
                                                    "
                                                    readonly
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between mt-1"
                                            >
                                                <span>Transfer Limit</span>
                                                <span>Unlimited</span>
                                            </div>
                                            <hr />
                                            <template
                                                v-if="
                                                    wallet.memo != '' ||
                                                    wallet.memo != null
                                                "
                                            >
                                                <div
                                                    class="d-flex justify-content-between"
                                                >
                                                    <span>Memo</span>
                                                    <span
                                                        class="text-warning"
                                                        >{{
                                                            wallet.memo
                                                                ? wallet.memo
                                                                : ""
                                                        }}</span
                                                    >
                                                </div>
                                                <hr />
                                            </template>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        This is a
                                        <span :ref="key" class="text-info">{{
                                            key ? key : ""
                                        }}</span>
                                        Chain address. Do not send any other
                                        Chain to this address or your funds may
                                        be lost.
                                    </div>
                                </div>
                                <div class="modal-footer text-end">
                                    <button
                                        type="submit"
                                        class="btn btn-success"
                                        :disabled="loading"
                                    >
                                        Deposit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// component
import VueQRCodeComponent from "vue-qrcode-component";
export default {
    // component list
    components: { "qr-code": VueQRCodeComponent },

    // component data
    data() {
        return {
            type: this.$route.params.type,
            symbol: this.$route.params.symbol,
            address: this.$route.params.address,
            wal: {},
            wal_trx: {},
            addresses: {},
            gnl: gnl,
            loading: false,
            memo: null,
            api: 1,
            pathname: "main",
            plat: plat,
        };
    },
    // custom methods
    methods: {
        fetchMainData() {
            this.$http
                .post(
                    "/user/fetch/eco/wallet/main/" +
                        this.symbol +
                        "/" +
                        this.address
                )
                .then((response) => {
                    (this.wal = response.data.wal),
                        (this.wal_trx = response.data.wal_trx),
                        (this.addresses = response.data.addresses);
                    this.$emit("RefreshMainWallet", response.data.wal);
                });
        },
    },

    // on component created
    created() {
        this.fetchMainData();
    },

    // on component mounted
    mounted() {},

    // on component destroyed
    destroyed() {},
};
</script>
