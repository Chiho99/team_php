import java.util.*;


public class xwordcomparator implements Comparator<xword> {
  
 @Override
 public int compare(xword w1, xword w2) {
  return w2.num-w1.num;
 }
 
}
class xword {
 String word;
 int num;
}

ArrayList<xword> wl1=new ArrayList<xword>();

void insertword(ArrayList<xword> wl,String ww) {
  int i;
  boolean aru=false;
  for(i=0;i<wl1.size();i++) {
    if (wl.get(i).word.equals(ww)) {
      aru=true;
      wl.get(i).num++;
      break;
    }
  }
    if (aru==false) {
      xword vv=new xword();
      vv.word=ww;
      vv.num=1;
      wl.add(vv);
    }
  
}

void draw()
{
}

class pr {
int company_id;
int release_id;
String company_name;
String title;
String main_image;
String created_at;


}

class prlist {
 int page;
 List<pr> data;
 
}


String getprbody(String cid,String rid) {
  String res="";
  String dta[]=loadStrings("https://hackathon.stg-prtimes.net/detail/"+cid+"/"+rid+"?token=e7zCG8N0sl5y");
  int i;
  String all=join(dta,"");
  String naka=split(all,",\"body\":")[1];
  String ns=split(naka,"\",\"reference_url\":")[0];
  res=ns.replaceAll("\\<.*?>","") ;
  res=res.replace("\\n"," ");
  res=res.replace("\\r"," ");
  
 return res; 
}

void setup() {
  int i;
  for(i=3;i<93;i++) {
    println("category: "+i);
  onefile(i,1,100,"shuukei"+i+".txt");
  onefile(i,100,200,"shuukei"+i+"_o.txt");
  }
}

void onefile(int cate,int start,int end,String fn)  {
   int pagenum;
   wl1.clear(); 
   for(pagenum=start;pagenum<end;pagenum++) {
  
  println("page: "+pagenum);
  
 int  categorynum=cate;
 // String dta[]=loadStrings("https://hackathon.stg-prtimes.net/list/"+pagenum+"?token=e7zCG8N0sl5y");
 String dta[]=loadStrings("https://hackathon.stg-prtimes.net/category_release/"+categorynum+"/"+pagenum+"?token=e7zCG8N0sl5y");
  int i;
//  prlist prl;
  
  String all="";
  
  for (i=0;i<dta.length;i++) {
   all+=dta[i]; 
  }
//  println(all);
  String prs[]=split(all,"{\"company_id\":");

  for (i=1;i<prs.length;i++) {
    String cid;
    String cn;
    String title;
    String image;
    String rid;
    String date;
    cid=split(prs[i],",\"release_id\":")[0];
    rid=split(split(prs[i],",\"release_id\":")[1],",\"company_name\":")[0];
    cn=split(split(split(prs[i],",\"release_id\":")[1],",\"company_name\":")[1], ",\"title\":")[0];
    title=split(  split(split(split(prs[i],",\"release_id\":")[1],",\"company_name\":")[1], ",\"title\":")[1],",\"main_image\":")[0];
    image=split(split(  split(split(split(prs[i],",\"release_id\":")[1],",\"company_name\":")[1], ",\"title\":")[1],",\"main_image\":")[1],",\"created_at\":")[0];
    date=split(split(split(  split(split(split(prs[i],",\"release_id\":")[1],",\"company_name\":")[1], ",\"title\":")[1],",\"main_image\":")[1],",\"created_at\":")[1],"}")[0];
    
//    println(cid+","+rid);
    //println(getprbody(cid,rid));   
    String xdata[]=new String[1];
 //   xdata[0]=getprbody(cid,rid);
     xdata[0]=title;
    saveStrings(dataPath("net.txt"),xdata);
        
    try{
      launch("\"C:\\Program Files (x86)\\MeCab\\bin\\mecab.exe\" "+dataPath("net.txt")+" -o "+dataPath("xo.txt"));
    Thread.sleep(50);} catch (Exception e) {
    // e.printStackTrace(); 
  } 
  int j,k;
  String xo[]=loadStrings("xo.txt");
  for(j=0;j<xo.length;j++) {
   try {
     String word=split(xo[j],char(9))[0]; 

    String hinshi=split(split(xo[j],char(9))[1],",")[0];
    String koyuu=split(split(xo[j],char(9))[1],",")[1];
    if (hinshi.equals("名詞")&&word.length()>1&&(koyuu.equals("固有名詞")||koyuu.equals("左辺接続")||koyuu.equals("一般"))) {//&&koyuu.equals("固有名詞")||word.equals("コロナ")) {
  //   println(word); 
     insertword(wl1,word);
    }
    
  
   }    catch (Exception e) {}
  }
    
  }
    
    
   }
   
   println("---");
   int q;
   Collections.sort(wl1,new xwordcomparator());
   println(wl1.size());
   ArrayList<String> xout=new ArrayList<String>();
   for(q=0;q<wl1.size();q++) {
if (wl1.get(q).num>10) {   println(wl1.get(q).word+":"+wl1.get(q).num);
     xout.add(wl1.get(q).word+":"+wl1.get(q).num);} 
   }
   String xxout[]=new String[xout.size()];
   xout.toArray(xxout);
   saveStrings(dataPath(fn),xxout);
}
  
  
