#include <Keypad.h>
#include <LiquidCrystal.h>

const byte Rows=4;
const byte Cols=4;
int dual=0;
char key;
int fail=0;
int dubisa=0;
int forStar=0;
int lastfinal=0;
int stopRead=0;
int endoffile=0;
int gotintoreceive=0;
int sendingVar=0;
int startedReading=0;
int pressed=0;

char entered_value[10];
int dontloop=0;
int dontloop2=0;
int dontloop3=0;
char keys[Rows][Cols]={{'A','3','2','1'},{'B','6','5','4'},{'C','9','8','7'},{'D','#','0','*'}};

byte rowPins[Rows]={10,9,8,7};
byte colPins[Cols]={3,11,12,13};

const int rs = 14, en = 15, d4 = 16, d5 = 17, d6 = 18, d7 = 19;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);



Keypad keypad =Keypad(makeKeymap(keys),rowPins,colPins,Rows,Cols);

int chooser=1;

int control_looper=1;
char a;
char b[10];

int i=0;
int p=0;
int checker=1;

void setup() {
  // put your setup code here, to run once:
Serial.begin(9600);
lcd.begin(16, 2);
 analogWrite(8,60);
 lcd.clear();
  lcd.print("hello, world!");
pinMode(LED_BUILTIN, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:

key=keypad.getKey();

if(key != NO_KEY){

  if(key=='#'){
  
    Serial.println("#");
dontloop=0;
dontloop2=0;
dontloop3=0;
      
   i=0;
   // Serial.println("receiving to check");
    lastfinal=0;
    chooser=1;

       for(int i=0; i<10; i++){
        b[i]=' ';
       }
   
  }else if(key =='*'){
    lcd.clear();
     forStar=0;
    if(chooser==1){
      Serial.println("being processed");
      for(int i=0; i<10; i++){
        entered_value[i]=' ';
      }
      chooser=0;

       lcd.clear();
         digitalWrite(LED_BUILTIN, LOW);
       lcd.print("Inter your Id");
      Serial.println("keyboard mode enter your value ");
      Serial.println();
    }else{
      
      
        chooser=1;
Serial.println();
        for(int i=0; i<10; i++){
        Serial.print(entered_value[i]);
        lcd.print(entered_value[i]);
      }
      
      p=0;
      Serial.println();
      Serial.println("exiting keyboard mode");
      Serial.println();
    }
  }else{
    
    pressed=1;
   
  }
}

if(chooser==0  && pressed==1 && forStar==0){

forStar=1;
lcd.clear();

  
}

if(chooser==0  && pressed==1){
  pressed=0;
  lcd.print("*");
  entered_value[p]=key;
  Serial.print(key);
  p++;

  
}else{

gotintoreceive=0;
receive();

}



   if(gotintoreceive==1 && startedReading==0 && dontloop3==0){
    dontloop3=1;
   // Serial.println("end of file");
   }
  
   
}



void receive(){

gotintoreceive=1;


  if(Serial.available()>0){
    
//delay(10);
startedReading=1;
a=char(Serial.read());

 if(a==' '){

for(int i=0; i<10; i++){

  Serial.print(b[i]);
}
Serial.println();
/**
for(int i=0; i<10; i++){

  Serial.print(entered_value[i]);
}
**/
Serial.println();
lastfinal=0;
for(int i=0; i<10; i++){

  if(b[i]!=entered_value[i]){
    lastfinal=1;
  }
}

if((lastfinal==0) && (dontloop==0)){
  dontloop=1;
 
  Serial.println("got something");
  digitalWrite(LED_BUILTIN, HIGH);
  lcd.clear();
  lcd.print("pass");
} 
/**
if(b[0] == entered_value[0]){
  Serial.println("got something");
}


if(b[1] == entered_value[1]){
  Serial.println("got something");
}
if(b[2] == entered_value[2]){
  Serial.println("got something");
}

**/

for(int i=0; i<10; i++){

 b[i]=' ';
}

i=0;
dual=0;
 }else{
b[i]=a;
i++;
 // Serial.print(a);
 }

 
  }else{
   
   stopRead=1;
   startedReading=0;
   if((dontloop==0) && (dontloop2==0)){
     dontloop2=1;
    lcd.clear();
    fail=1;
    lcd.print("fail");
   }

  }



}
