package com.example.darsh_shah.cfg;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.URI;
import java.net.URL;
import java.util.concurrent.ExecutionException;

public class MainActivity extends AppCompatActivity {
    private Button button;
    private EditText phn_number,password;
    SharedPreferences preferences;
    String line1= null;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button= (Button) findViewById(R.id.bt_login);
        phn_number= (EditText) findViewById(R.id.et_phn);
        password=(EditText) findViewById(R.id.et_password);
        preferences=getSharedPreferences("CFG",MODE_PRIVATE);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                    show();

            }


        });


    }

    public void show(){
        try {
            line1 = new getUser(getApplicationContext()).execute(password.getText().toString(),phn_number.getText().toString()).get();
        } catch (InterruptedException e) {
            e.printStackTrace();
        } catch (ExecutionException e) {
            e.printStackTrace();
        }
        line1=line1.trim();
        if(line1.equalsIgnoreCase("yes")){
            Toast.makeText(this,"Logged in",Toast.LENGTH_SHORT);
            preferences.edit().putString("Login","yes").apply();
//            Intent i = new Intent(MainActivity.this,HomePage.class);
//            i.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
//            startActivity(i);

        }
        else if(line1.equalsIgnoreCase("no")){
            Toast.makeText(this,"invalid",Toast.LENGTH_SHORT);
        }
        else{
            Toast.makeText(this,"need to register",Toast.LENGTH_SHORT);
            //startActivity(new Intent(MainActivity.this,RegisterActivity.class));
        }
    }


    class getUser extends AsyncTask<String,Void,String>{
        String line="";
        Context context;

        public getUser(Context context) {
            this.context=context;
        }

        @Override
        protected void onPreExecute() {
            super.onPreExecute();
        }



        @Override
        protected String doInBackground(String... strings) {
            String phone_number = (String)strings[0];
            String password=(String)strings[1];

            //Log.d("push_message",user);
            phone_number=phone_number.trim();
            password=password.trim();
            try{
            String link = "http://nahushrai.esy.es/dbit_get_hosp.php?phone_numbner="+phone_number+"&password="+password;

            URL url = new URL(link);
            HttpClient client = new DefaultHttpClient();
            HttpGet request = new HttpGet();
            request.setURI(new URI(link));
            HttpResponse response = client.execute(request);
            BufferedReader in = new BufferedReader(new
                    InputStreamReader(response.getEntity().getContent()));

            StringBuffer sb = new StringBuffer("");


            while ((line = in.readLine()) != null) {
                sb.append(line);
                break;
            }

            in.close();
            return sb.toString();
        } catch(Exception e){
            return new String("Exception: " + e.getMessage());
        }
        }

        @Override
        protected void onPostExecute(String s) {
            super.onPostExecute(s);
        }
    }


}
