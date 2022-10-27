from twilio.rest import Client
account_sid = "SID da sua conta"
auth_token = " token da sua conta no twilio"
client = Client(account_sid, auth_token)
client.menssages.create(from_="numero que o site te da", body="sua mensagem", to="numero de destino")





# Download the helper library from https://www.twilio.com/docs/python/install
#import os
#from twilio.rest import Client


# Find your Account SID and Auth Token at twilio.com/console
# and set the environment variables. See http://twil.io/secure
#account_sid = os.environ['TWILIO_ACCOUNT_SID']
#auth_token = os.environ['TWILIO_AUTH_TOKEN']
#client = Client(account_sid, auth_token)

#message = client.messages \
 #               .create(
  #                   body="Join Earth's mightiest heroes. Like Kevin Bacon.",
   #                  from_='+15017122661',
    #                 to='+15558675310'
     #            )

#print(message.sid)