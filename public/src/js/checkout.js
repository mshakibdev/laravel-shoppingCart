const stripe = Stripe('pk_test_gIbzWFW7NJVfwL2v6pB8L7SY002Z2Kwh4K');
const {token, error} = await stripe.createToken('bank_account', {
    country: 'US',
    currency: 'usd',
    routing_number: '110000000',
    account_number: '000123456789',
    account_holder_name: 'Jenny Rosen',
    account_holder_type: 'individual',
});