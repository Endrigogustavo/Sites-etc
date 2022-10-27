

from http import client


account_sid = ""
auth_token = ""
meu_numero = ""
numero_twilio = ""

client = client(account_sid, token)

mensagem = """
<Response>
<Say>
eae men kkkkkkk python ta top em
</say>
</Response>"""

ligacao = client.calls.create(
to=meu_numero,
from_=numero_twilio
twiml=mensagem

)