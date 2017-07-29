package com.example.darsh_shah.cfg;

/**
 * Created by Darsh_Shah on 29-07-2017.
 */

public class User {
    public String id;
    public String category;
    public String password;
    public String weightOne;
    public String priceOne;
    public String weightTwo;
    public String priceTwo;
    public String weightThree;
    public String priceThree;
    public String featured;
    public String isnew;
    public String catGroupID;
    public String name;
    public String image;
    public String quantity;
    public String item_selected;
    public String price;

    public User(String id, String category, String weightOne, String priceOne, String weightTwo, String priceTwo, String weightThree, String priceThree, String featured, String isnew, String catGroupID, String name, String image, String quantity, String item_selected){

        this.id = id;
        this.category = category;
        this.weightOne = weightOne;
        this.priceOne = priceOne;
        this.weightTwo = weightTwo;
        this.priceTwo = priceTwo;
        this.weightThree = weightThree;
        this.priceThree = priceThree;
        this.featured = featured;
        this.isnew = isnew;
        this.catGroupID = catGroupID;
        this.name = name;
        this.image = image;
        this.quantity = quantity;
        this.item_selected = item_selected;
    }

    public User(String id,String name,String password){
        this.id=id;
        this.name=name;
        this.password=password;
        //this.price = price;
    }
    public String getId()
    {
        return this.id;
    }
    public void setId(String id)
    {
        this.id = id;
    }
    public String getCategory()
    {
        return this.category;
    }
    public void setCategory(String category)
    {
        this.category = category;
    }
    public String getWeightOne()
    {
        return this.weightOne;
    }
    public void setWeightOne(String weightOne)
    {
        this.weightOne = weightOne;
    }
    public String getPriceOne()
    {
        return this.priceOne;
    }
    public void setPriceOne(String priceOne)
    {
        this.priceOne = priceOne;
    }
    public String getWeightTwo()
    {
        return this.weightTwo;
    }
    public void setWeightTwo(String weightTwo)
    {
        this.weightTwo = weightTwo;
    }
    public String getPriceTwo()
    {
        return this.priceTwo;
    }
    public void setPriceTwo(String priceTwo)
    {
        this.priceTwo = priceTwo;
    }
    public String getWeightThree()
    {
        return this.weightThree;
    }
    public void setWeightThree(String weightThree)
    {
        this.weightThree = weightThree;
    }
    public String getPriceThree()
    {
        return this.priceThree;
    }
    public void setPriceThree(String priceThree)
    {
        this.priceThree = priceThree;
    }
    public String getFeatured()
    {
        return this.featured;
    }
    public void setFeatured(String featured)
    {
        this.featured = featured;
    }
    public String getIsNew()
    {
        return this.isnew;
    }
    public void setIsNew(String isnew)
    {
        this.isnew = isnew;
    }
    public String getCatGroupID()
    {
        return this.catGroupID;
    }
    public void setCatGroupID(String catGroupID)
    {
        this.catGroupID = catGroupID;
    }
    public String getName()
    {
        return this.name;
    }
    public void setName(String name)
    {
        this.name = name;
    }
    public String getImage()
    {
        return this.image;
    }
    public void setImage(String image)
    {
        this.image = image;
    }
    public String getQuantity()
    {
        return this.quantity;
    }
    public void setQuantity(String quantity)
    {
        this.quantity = quantity;
    }
    public String getItemSelected()
    {
        return this.item_selected;
    }
    public void setItemSelected(String item_selected)
    {
        this.item_selected = item_selected;
    }

    public String getPrice(){
        return this.price;
    }
}
