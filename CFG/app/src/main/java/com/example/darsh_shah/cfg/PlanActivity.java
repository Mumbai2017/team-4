package com.example.darsh_shah.cfg;

import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.net.Uri;
import android.os.AsyncTask;
import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Base64;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import com.squareup.picasso.Picasso;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.BufferedReader;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.InputStreamReader;
import java.net.URI;
import java.net.URL;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Locale;
import java.util.concurrent.ExecutionException;

import static android.provider.MediaStore.Files.FileColumns.MEDIA_TYPE_IMAGE;
import static android.provider.MediaStore.Files.FileColumns.MEDIA_TYPE_VIDEO;

public class PlanActivity extends AppCompatActivity {
    private EditText editText;
    private Button button,camera;
    String line1="";
    private Uri imgUri;
    private ImageView imageView;
    private String img_str;
    public static final int CAMERA_PIC_REQUEST=11;
    Bitmap image;
    private static final String IMAGE_DIRECTORY_NAME = "Hello Camera";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_plan);
        editText= (EditText) findViewById(R.id.et_unit);
        button= (Button) findViewById(R.id.bt_unit);
        camera= (Button) findViewById(R.id.bt_camera);
        imageView= (ImageView) findViewById(R.id.img_vw_unit);

        camera.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent("android.media.action.IMAGE_CAPTURE");
                startActivityForResult(intent,CAMERA_PIC_REQUEST);
                ByteArrayOutputStream stream = new ByteArrayOutputStream();
                image.compress(Bitmap.CompressFormat.PNG, 90, stream); //compress to which format you want.
                byte [] byte_arr = stream.toByteArray();
                img_str = Base64.encodeToString(byte_arr,Base64.DEFAULT);
            }
        });
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                try {
                    line1 = new PlanActivity.Plan(getApplicationContext()).execute(editText.getText().toString(),img_str).get();
                } catch (InterruptedException e) {
                    e.printStackTrace();
                } catch (ExecutionException e) {
                    e.printStackTrace();
                }
                line1=line1.trim();
            }
        });

        if(line1.equalsIgnoreCase("yes")){
            Toast.makeText(this,"Plan uploaded",Toast.LENGTH_SHORT);
        }
        else{

        }
    }

    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        if (requestCode == CAMERA_PIC_REQUEST) {
            image = (Bitmap) data.getExtras().get("data");
            imgUri=data.getData();
            //Bitmap bitmap = BitmapFactory.decodeResource(imgUri);

            //Log.d("DATA",image_str);
            Picasso.with(this).load(imgUri).into(imageView);
        }
    }
    class Plan extends AsyncTask<String,Void,String> {
        String line="";
        Context context;

        public Plan(Context context) {
            this.context=context;
        }

        @Override
        protected void onPreExecute() {
            super.onPreExecute();
        }



        @Override
        protected String doInBackground(String... strings) {
            String unit = (String)strings[0];
            unit=unit.trim();
            try{
                String link = "http://nahushrai.esy.es/dbit_get_hosp.php?unit="+unit;

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
