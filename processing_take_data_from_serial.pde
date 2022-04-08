import processing.serial.*;
Serial myport;
String myString;
char check;
int nl=10;
char data;

void  setup(){
  
  myport=new Serial(this,"COM3",9600);
  size(100,100);
 // parseFile();
  
}
void draw(){
 // myport.write("donag");
  
  
  while(myport.available()>0){
    
  //  myString=myport.readStringUntil(nl);
    check=myport.readChar();
    print(check);
    if(check != ' '){
      background(0);
  //   println("got something");
   //  println(check);
   //   println(int(check));
     
      
      if(check == '#'){
        println("it is one");
        parseFile();
      }else{
       // println();
      }
}
//delay(1000);
}

}
void parseFile(){
  
  BufferedReader reader =createReader("D:/cafu 1/data.txt");
  
  String line=null;
  
  try{
    
    while((line=reader.readLine())!= null){
     
      println(line);
      myport.write(line);
      delay(20);
    }
    reader.close();
  }catch(IOException e){
    e.printStackTrace();
  }
  
}
